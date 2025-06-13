<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeParameterGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeParameterGroupResponseBody\parameterGroup\parameterDetail;

class parameterGroup extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $DBType;

    /**
     * @var string
     */
    public $DBVersion;

    /**
     * @var string
     */
    public $forceRestart;

    /**
     * @var int
     */
    public $parameterCounts;

    /**
     * @var parameterDetail[]
     */
    public $parameterDetail;

    /**
     * @var string
     */
    public $parameterGroupDesc;

    /**
     * @var string
     */
    public $parameterGroupId;

    /**
     * @var string
     */
    public $parameterGroupName;

    /**
     * @var string
     */
    public $parameterGroupType;
    protected $_name = [
        'createTime' => 'CreateTime',
        'DBType' => 'DBType',
        'DBVersion' => 'DBVersion',
        'forceRestart' => 'ForceRestart',
        'parameterCounts' => 'ParameterCounts',
        'parameterDetail' => 'ParameterDetail',
        'parameterGroupDesc' => 'ParameterGroupDesc',
        'parameterGroupId' => 'ParameterGroupId',
        'parameterGroupName' => 'ParameterGroupName',
        'parameterGroupType' => 'ParameterGroupType',
    ];

    public function validate()
    {
        if (\is_array($this->parameterDetail)) {
            Model::validateArray($this->parameterDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }

        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }

        if (null !== $this->forceRestart) {
            $res['ForceRestart'] = $this->forceRestart;
        }

        if (null !== $this->parameterCounts) {
            $res['ParameterCounts'] = $this->parameterCounts;
        }

        if (null !== $this->parameterDetail) {
            if (\is_array($this->parameterDetail)) {
                $res['ParameterDetail'] = [];
                $n1 = 0;
                foreach ($this->parameterDetail as $item1) {
                    $res['ParameterDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->parameterGroupDesc) {
            $res['ParameterGroupDesc'] = $this->parameterGroupDesc;
        }

        if (null !== $this->parameterGroupId) {
            $res['ParameterGroupId'] = $this->parameterGroupId;
        }

        if (null !== $this->parameterGroupName) {
            $res['ParameterGroupName'] = $this->parameterGroupName;
        }

        if (null !== $this->parameterGroupType) {
            $res['ParameterGroupType'] = $this->parameterGroupType;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }

        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }

        if (isset($map['ForceRestart'])) {
            $model->forceRestart = $map['ForceRestart'];
        }

        if (isset($map['ParameterCounts'])) {
            $model->parameterCounts = $map['ParameterCounts'];
        }

        if (isset($map['ParameterDetail'])) {
            if (!empty($map['ParameterDetail'])) {
                $model->parameterDetail = [];
                $n1 = 0;
                foreach ($map['ParameterDetail'] as $item1) {
                    $model->parameterDetail[$n1] = parameterDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ParameterGroupDesc'])) {
            $model->parameterGroupDesc = $map['ParameterGroupDesc'];
        }

        if (isset($map['ParameterGroupId'])) {
            $model->parameterGroupId = $map['ParameterGroupId'];
        }

        if (isset($map['ParameterGroupName'])) {
            $model->parameterGroupName = $map['ParameterGroupName'];
        }

        if (isset($map['ParameterGroupType'])) {
            $model->parameterGroupType = $map['ParameterGroupType'];
        }

        return $model;
    }
}
