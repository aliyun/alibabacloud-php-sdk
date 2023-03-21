<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyTargetResponseBody;

use AlibabaCloud\Tea\Model;

class strategyTargets extends Model
{
    /**
     * @var int
     */
    public $bindUuidCount;

    /**
     * @var string
     */
    public $flag;

    /**
     * @var string
     */
    public $target;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'bindUuidCount' => 'BindUuidCount',
        'flag'          => 'Flag',
        'target'        => 'Target',
        'targetType'    => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindUuidCount) {
            $res['BindUuidCount'] = $this->bindUuidCount;
        }
        if (null !== $this->flag) {
            $res['Flag'] = $this->flag;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return strategyTargets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindUuidCount'])) {
            $model->bindUuidCount = $map['BindUuidCount'];
        }
        if (isset($map['Flag'])) {
            $model->flag = $map['Flag'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
