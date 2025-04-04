<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\serviceParameters\serviceParameter;
use AlibabaCloud\Tea\Model;

class serviceParameters extends Model
{
    /**
     * @var serviceParameter[]
     */
    public $serviceParameter;
    protected $_name = [
        'serviceParameter' => 'ServiceParameter',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceParameter) {
            $res['ServiceParameter'] = [];
            if (null !== $this->serviceParameter && \is_array($this->serviceParameter)) {
                $n = 0;
                foreach ($this->serviceParameter as $item) {
                    $res['ServiceParameter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceParameter'])) {
            if (!empty($map['ServiceParameter'])) {
                $model->serviceParameter = [];
                $n = 0;
                foreach ($map['ServiceParameter'] as $item) {
                    $model->serviceParameter[$n++] = null !== $item ? serviceParameter::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
