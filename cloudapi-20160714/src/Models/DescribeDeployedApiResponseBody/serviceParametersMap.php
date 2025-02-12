<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\serviceParametersMap\serviceParameterMap;

class serviceParametersMap extends Model
{
    /**
     * @var serviceParameterMap[]
     */
    public $serviceParameterMap;
    protected $_name = [
        'serviceParameterMap' => 'ServiceParameterMap',
    ];

    public function validate()
    {
        if (\is_array($this->serviceParameterMap)) {
            Model::validateArray($this->serviceParameterMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serviceParameterMap) {
            if (\is_array($this->serviceParameterMap)) {
                $res['ServiceParameterMap'] = [];
                $n1                         = 0;
                foreach ($this->serviceParameterMap as $item1) {
                    $res['ServiceParameterMap'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['ServiceParameterMap'])) {
            if (!empty($map['ServiceParameterMap'])) {
                $model->serviceParameterMap = [];
                $n1                         = 0;
                foreach ($map['ServiceParameterMap'] as $item1) {
                    $model->serviceParameterMap[$n1++] = serviceParameterMap::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
