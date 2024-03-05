<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models;

use AlibabaCloud\Tea\Model;

class GetPreViewUrlRequest extends Model
{
    /**
     * @var string
     */
    public $applyCode;

    /**
     * @var int
     */
    public $fileId;

    /**
     * @var string
     */
    public $fileKey;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $scene;
    protected $_name = [
        'applyCode' => 'applyCode',
        'fileId'    => 'fileId',
        'fileKey'   => 'fileKey',
        'orderId'   => 'orderId',
        'scene'     => 'scene',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyCode) {
            $res['applyCode'] = $this->applyCode;
        }
        if (null !== $this->fileId) {
            $res['fileId'] = $this->fileId;
        }
        if (null !== $this->fileKey) {
            $res['fileKey'] = $this->fileKey;
        }
        if (null !== $this->orderId) {
            $res['orderId'] = $this->orderId;
        }
        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPreViewUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['applyCode'])) {
            $model->applyCode = $map['applyCode'];
        }
        if (isset($map['fileId'])) {
            $model->fileId = $map['fileId'];
        }
        if (isset($map['fileKey'])) {
            $model->fileKey = $map['fileKey'];
        }
        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }
        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }

        return $model;
    }
}
