<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models;

use AlibabaCloud\Tea\Model;

class GetDownloadUrlRequest extends Model
{
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
    public $freeOrderApplyCode;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $scene;
    protected $_name = [
        'fileId'             => 'fileId',
        'fileKey'            => 'fileKey',
        'freeOrderApplyCode' => 'freeOrderApplyCode',
        'orderId'            => 'orderId',
        'scene'              => 'scene',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['fileId'] = $this->fileId;
        }
        if (null !== $this->fileKey) {
            $res['fileKey'] = $this->fileKey;
        }
        if (null !== $this->freeOrderApplyCode) {
            $res['freeOrderApplyCode'] = $this->freeOrderApplyCode;
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
     * @return GetDownloadUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fileId'])) {
            $model->fileId = $map['fileId'];
        }
        if (isset($map['fileKey'])) {
            $model->fileKey = $map['fileKey'];
        }
        if (isset($map['freeOrderApplyCode'])) {
            $model->freeOrderApplyCode = $map['freeOrderApplyCode'];
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
