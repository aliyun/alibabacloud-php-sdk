<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\SDK\Imm\V20170906\Models\GetImageCroppingSuggestionsResponseBody\croppingSuggestions;
use AlibabaCloud\Tea\Model;

class GetImageCroppingSuggestionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $imageUri;

    /**
     * @var croppingSuggestions[]
     */
    public $croppingSuggestions;
    protected $_name = [
        'requestId'           => 'RequestId',
        'imageUri'            => 'ImageUri',
        'croppingSuggestions' => 'CroppingSuggestions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->imageUri) {
            $res['ImageUri'] = $this->imageUri;
        }
        if (null !== $this->croppingSuggestions) {
            $res['CroppingSuggestions'] = [];
            if (null !== $this->croppingSuggestions && \is_array($this->croppingSuggestions)) {
                $n = 0;
                foreach ($this->croppingSuggestions as $item) {
                    $res['CroppingSuggestions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetImageCroppingSuggestionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ImageUri'])) {
            $model->imageUri = $map['ImageUri'];
        }
        if (isset($map['CroppingSuggestions'])) {
            if (!empty($map['CroppingSuggestions'])) {
                $model->croppingSuggestions = [];
                $n                          = 0;
                foreach ($map['CroppingSuggestions'] as $item) {
                    $model->croppingSuggestions[$n++] = null !== $item ? croppingSuggestions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
