<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\GetFirewallFeatureResponseBody;

use AlibabaCloud\Dara\Model;

class features extends Model
{
    /**
     * @var string
     */
    public $featureName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'featureName' => 'FeatureName',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->featureName) {
            $res['FeatureName'] = $this->featureName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['FeatureName'])) {
            $model->featureName = $map['FeatureName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
