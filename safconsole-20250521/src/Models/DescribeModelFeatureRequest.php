<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safconsole\V20250521\Models;

use AlibabaCloud\Dara\Model;

class DescribeModelFeatureRequest extends Model
{
    /**
     * @var int
     */
    public $customerModuleId;

    /**
     * @var string
     */
    public $featureTemplate;
    protected $_name = [
        'customerModuleId' => 'CustomerModuleId',
        'featureTemplate' => 'FeatureTemplate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customerModuleId) {
            $res['CustomerModuleId'] = $this->customerModuleId;
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
        if (isset($map['CustomerModuleId'])) {
            $model->customerModuleId = $map['CustomerModuleId'];
        }

        if (isset($map['FeatureTemplate'])) {
            $model->featureTemplate = $map['FeatureTemplate'];
        }

        return $model;
    }
}
