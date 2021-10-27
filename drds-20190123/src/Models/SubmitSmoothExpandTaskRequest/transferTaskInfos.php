<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\SubmitSmoothExpandTaskRequest;

use AlibabaCloud\Tea\Model;

class transferTaskInfos extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $dstInstanceName;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $srcInstanceName;
    protected $_name = [
        'dbName'          => 'DbName',
        'dstInstanceName' => 'DstInstanceName',
        'instanceType'    => 'InstanceType',
        'srcInstanceName' => 'SrcInstanceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->dstInstanceName) {
            $res['DstInstanceName'] = $this->dstInstanceName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->srcInstanceName) {
            $res['SrcInstanceName'] = $this->srcInstanceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transferTaskInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DstInstanceName'])) {
            $model->dstInstanceName = $map['DstInstanceName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['SrcInstanceName'])) {
            $model->srcInstanceName = $map['SrcInstanceName'];
        }

        return $model;
    }
}
