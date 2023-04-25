<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ImportDoNotCallNumbersRequest extends Model
{
    /**
     * @example temp/blacklist/import/15772471154xxxx/ccc-test/20220315100340/blacklist.xlsx
     *
     * @var string
     */
    public $filePath;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example ["1900000****","1312121****"]
     *
     * @var string
     */
    public $numberList;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'filePath'   => 'FilePath',
        'instanceId' => 'InstanceId',
        'numberList' => 'NumberList',
        'remark'     => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ImportDoNotCallNumbersRequest
     */
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
