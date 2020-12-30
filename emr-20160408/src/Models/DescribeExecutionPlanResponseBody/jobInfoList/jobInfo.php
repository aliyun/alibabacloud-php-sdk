<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeExecutionPlanResponseBody\jobInfoList;

use AlibabaCloud\Tea\Model;

class jobInfo extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $failAct;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $runParameter;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'type'         => 'Type',
        'failAct'      => 'FailAct',
        'name'         => 'Name',
        'runParameter' => 'RunParameter',
        'id'           => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->failAct) {
            $res['FailAct'] = $this->failAct;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->runParameter) {
            $res['RunParameter'] = $this->runParameter;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['FailAct'])) {
            $model->failAct = $map['FailAct'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RunParameter'])) {
            $model->runParameter = $map['RunParameter'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
