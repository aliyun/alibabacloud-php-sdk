<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductQuotaDimensionsResponseBody\quotaDimensions;

use AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductQuotaDimensionsResponseBody\quotaDimensions\dimensionValueDetail\dependentDimensions;
use AlibabaCloud\Tea\Model;

class dimensionValueDetail extends Model
{
    /**
     * @description The quota dimensions on which the quota dimension that you want to query is dependent.
     *
     * @var dependentDimensions[]
     */
    public $dependentDimensions;

    /**
     * @description The name of the quota dimension.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $name;

    /**
     * @description The value of the quota dimension.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'dependentDimensions' => 'DependentDimensions',
        'name'                => 'Name',
        'value'               => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dependentDimensions) {
            $res['DependentDimensions'] = [];
            if (null !== $this->dependentDimensions && \is_array($this->dependentDimensions)) {
                $n = 0;
                foreach ($this->dependentDimensions as $item) {
                    $res['DependentDimensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dimensionValueDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DependentDimensions'])) {
            if (!empty($map['DependentDimensions'])) {
                $model->dependentDimensions = [];
                $n                          = 0;
                foreach ($map['DependentDimensions'] as $item) {
                    $model->dependentDimensions[$n++] = null !== $item ? dependentDimensions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
