<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCommonTargetConfigResponseBody;

use AlibabaCloud\Tea\Model;

class targetList extends Model
{
    /**
     * @example add
     *
     * @var string
     */
    public $flag;

    /**
     * @example c23551de6149343e8a54e69fbefe6****
     *
     * @var string
     */
    public $target;

    /**
     * @example image_repo
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'flag'       => 'Flag',
        'target'     => 'Target',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return targetList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
