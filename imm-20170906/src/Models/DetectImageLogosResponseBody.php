<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\SDK\Imm\V20170906\Models\DetectImageLogosResponseBody\logos;
use AlibabaCloud\Tea\Model;

class DetectImageLogosResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var logos[]
     */
    public $logos;

    /**
     * @var string
     */
    public $imageUri;
    protected $_name = [
        'requestId' => 'RequestId',
        'logos'     => 'Logos',
        'imageUri'  => 'ImageUri',
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
        if (null !== $this->logos) {
            $res['Logos'] = [];
            if (null !== $this->logos && \is_array($this->logos)) {
                $n = 0;
                foreach ($this->logos as $item) {
                    $res['Logos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->imageUri) {
            $res['ImageUri'] = $this->imageUri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectImageLogosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Logos'])) {
            if (!empty($map['Logos'])) {
                $model->logos = [];
                $n            = 0;
                foreach ($map['Logos'] as $item) {
                    $model->logos[$n++] = null !== $item ? logos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ImageUri'])) {
            $model->imageUri = $map['ImageUri'];
        }

        return $model;
    }
}
