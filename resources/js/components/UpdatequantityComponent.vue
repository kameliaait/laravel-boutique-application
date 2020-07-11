<template>
    <div class="container">
       <td class="border-0 align-middle">
        <select class="custom-select" name="qty" id="qty" data-id="{{ $product->rowId }}">
         @for ($i = 1; $i <= 5; $i++)
        <option value="{{ $i }}" {{ $product->qty == $i ? 'selected' : ''}}>
                         {{ $i }}
         </option>
         @endfor
        </select>
        </td>
    </div>
</template>

<script>
    export default {
        props[dataId],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
