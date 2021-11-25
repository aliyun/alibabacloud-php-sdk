<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\SDK\Imm\V20170906\Models\GetImageCroppingSuggestionsResponseBody\croppingSuggestions;
use AlibabaCloud\Tea\Model;

class GetImageCroppingSuggestionsResponseBody extends Model
{
    /**
     * @var croppingSuggestions[]
     */
    public $croppingSuggestions;

    /**
     * @var string
     */
    public $imageUri;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'croppingSuggestions' => 'CroppingSuggestions',
        'imageUri'            => 'ImageUri',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->croppingSuggestions) {
            $res['CroppingSuggestions'] = [];
            if (null !== $this->croppingSuggestions && \is_array($this->croppingSuggestions)) {
                $n = 0;
                foreach ($this->croppingSuggestions as $item) {
                    $res['CroppingSuggestions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->imageUri) {
            $res['ImageUri'] = $this->imageUri;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CroppingSuggestions'])) {
            if (!empty($map['CroppingSuggestions'])) {
                $model->croppingSuggestions = [];
                $n                          = 0;
                foreach ($map['CroppingSuggestions'] as $item) {
                    $model->croppingSuggestions[$n++] = null !== $item ? croppingSuggestions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ImageUri'])) {
            $model->imageUri = $map['ImageUri'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
