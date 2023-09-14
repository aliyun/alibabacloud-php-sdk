<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaDimensionRequest;

use AlibabaCloud\Tea\Model;

class dependentDimensions extends Model
{
    /**
     * @description The key of the quota dimension on which the quota dimension that you want to query is dependent.
     *
     * > The value range of N varies based on the number of quota dimensions that are supported by the specified Alibaba Cloud service.
     * @example regionId
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the quota dimension on which the quota dimension that you want to query is dependent.
     *
     * > The value range of N varies based on the number of quota dimensions that are supported by the specified Alibaba Cloud service.
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
     * @return dependentDimensions
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
