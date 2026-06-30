<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeAppInstanceAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class uploadKeyList extends Model
{
    /**
     * @var bool
     */
    public $isSystemKey;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $slsStorageBytes;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $uploadKey;
    protected $_name = [
        'isSystemKey' => 'IsSystemKey',
        'remark' => 'Remark',
        'slsStorageBytes' => 'SlsStorageBytes',
        'status' => 'Status',
        'uploadKey' => 'UploadKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isSystemKey) {
            $res['IsSystemKey'] = $this->isSystemKey;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->slsStorageBytes) {
            $res['SlsStorageBytes'] = $this->slsStorageBytes;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->uploadKey) {
            $res['UploadKey'] = $this->uploadKey;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsSystemKey'])) {
            $model->isSystemKey = $map['IsSystemKey'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['SlsStorageBytes'])) {
            $model->slsStorageBytes = $map['SlsStorageBytes'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UploadKey'])) {
            $model->uploadKey = $map['UploadKey'];
        }

        return $model;
    }
}
