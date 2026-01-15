<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeCustomerModuleMetaInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeCustomerModuleMetaInfoResponseBody\resultObject\featureList;

class resultObject extends Model
{
    /**
     * @var featureList[]
     */
    public $featureList;

    /**
     * @var string
     */
    public $featureTemplate;
    protected $_name = [
        'featureList' => 'FeatureList',
        'featureTemplate' => 'FeatureTemplate',
    ];

    public function validate()
    {
        if (\is_array($this->featureList)) {
            Model::validateArray($this->featureList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->featureList) {
            if (\is_array($this->featureList)) {
                $res['FeatureList'] = [];
                $n1 = 0;
                foreach ($this->featureList as $item1) {
                    $res['FeatureList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->featureTemplate) {
            $res['FeatureTemplate'] = $this->featureTemplate;
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
        if (isset($map['FeatureList'])) {
            if (!empty($map['FeatureList'])) {
                $model->featureList = [];
                $n1 = 0;
                foreach ($map['FeatureList'] as $item1) {
                    $model->featureList[$n1] = featureList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FeatureTemplate'])) {
            $model->featureTemplate = $map['FeatureTemplate'];
        }

        return $model;
    }
}
