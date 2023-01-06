<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaAlarmsRequest;

use AlibabaCloud\Tea\Model;

class quotaDimensions extends Model
{
    /**
     * @description The dimension keys.
     *
     * >  The value range of N varies based on the number of dimensions that are supported by the related cloud service.
     * @example regionId
     *
     * @var string
     */
    public $key;

    /**
     * @description The dimension values.
     *
     * >  The value range of N varies based on the number of dimensions that are supported by the related cloud service.
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
