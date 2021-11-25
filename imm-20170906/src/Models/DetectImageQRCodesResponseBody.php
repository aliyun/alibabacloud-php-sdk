<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\SDK\Imm\V20170906\Models\DetectImageQRCodesResponseBody\QRCodes;
use AlibabaCloud\Tea\Model;

class DetectImageQRCodesResponseBody extends Model
{
    /**
     * @var string
     */
    public $imageUri;

    /**
     * @var QRCodes[]
     */
    public $QRCodes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageUri'  => 'ImageUri',
        'QRCodes'   => 'QRCodes',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUri) {
            $res['ImageUri'] = $this->imageUri;
        }
        if (null !== $this->QRCodes) {
            $res['QRCodes'] = [];
            if (null !== $this->QRCodes && \is_array($this->QRCodes)) {
                $n = 0;
                foreach ($this->QRCodes as $item) {
                    $res['QRCodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectImageQRCodesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageUri'])) {
            $model->imageUri = $map['ImageUri'];
        }
        if (isset($map['QRCodes'])) {
            if (!empty($map['QRCodes'])) {
                $model->QRCodes = [];
                $n              = 0;
                foreach ($map['QRCodes'] as $item) {
                    $model->QRCodes[$n++] = null !== $item ? QRCodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
