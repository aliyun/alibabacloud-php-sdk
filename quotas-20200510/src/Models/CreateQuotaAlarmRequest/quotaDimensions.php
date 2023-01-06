<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\CreateQuotaAlarmRequest;

use AlibabaCloud\Tea\Model;

class quotaDimensions extends Model
{
    /**
     * @description The dimension keys.
     *
     * >  If you set the ProductCode parameter to ecs, ecs-spec, actiontrail, or ess, this parameter is required.
     * @example regionId
     *
     * @var string
     */
    public $key;

    /**
     * @description The dimension values.
     *
     * >  If you set the ProductCode parameter to ecs, ecs-spec, actiontrail, or ess, this parameter is required.
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
     * @return quotaDimensions
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
