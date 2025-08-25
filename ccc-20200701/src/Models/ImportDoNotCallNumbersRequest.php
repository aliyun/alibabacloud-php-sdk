<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class ImportDoNotCallNumbersRequest extends Model
{
    /**
     * @var string
     */
    public $filePath;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $numberList;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'filePath' => 'FilePath',
        'instanceId' => 'InstanceId',
        'numberList' => 'NumberList',
        'remark' => 'Remark',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->numberList) {
            $res['NumberList'] = $this->numberList;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
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
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NumberList'])) {
            $model->numberList = $map['NumberList'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
