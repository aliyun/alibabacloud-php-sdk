<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\CreateQuotaApplicationRequest;

use AlibabaCloud\Tea\Model;

class dimensions extends Model
{
    /**
     * @description The dimension keys.
     *
     * > This parameter is required if you set the ProductCode parameter to ecs, ecs-spec, actiontrail, or ess.
     * @example regionId
     *
     * @var string
     */
    public $key;

    /**
     * @description The dimension values.
     *
     * > This parameter is required if you set the ProductCode parameter to ecs, ecs-spec, actiontrail, or ess.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dimensions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
