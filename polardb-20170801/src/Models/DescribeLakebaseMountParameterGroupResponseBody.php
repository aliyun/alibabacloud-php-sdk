<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeLakebaseMountParameterGroupResponseBody\parameterDetail;

class DescribeLakebaseMountParameterGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $isApply;

    /**
     * @var string
     */
    public $modifyTime;

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
     * @var int
     */
    public $parameterGroupType;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'isApply' => 'IsApply',
        'modifyTime' => 'ModifyTime',
        'parameterDetail' => 'ParameterDetail',
        'parameterGroupDesc' => 'ParameterGroupDesc',
        'parameterGroupId' => 'ParameterGroupId',
        'parameterGroupName' => 'ParameterGroupName',
        'parameterGroupType' => 'ParameterGroupType',
        'requestId' => 'RequestId',
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

        if (null !== $this->isApply) {
            $res['IsApply'] = $this->isApply;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        if (isset($map['IsApply'])) {
            $model->isApply = $map['IsApply'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
