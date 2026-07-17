<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class ModifyInstanceFeaturesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $siteFeaturesShrink;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'siteFeaturesShrink' => 'SiteFeatures',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->siteFeaturesShrink) {
            $res['SiteFeatures'] = $this->siteFeaturesShrink;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['SiteFeatures'])) {
            $model->siteFeaturesShrink = $map['SiteFeatures'];
        }

        return $model;
    }
}
