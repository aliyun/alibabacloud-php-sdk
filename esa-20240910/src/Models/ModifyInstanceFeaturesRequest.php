<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ModifyInstanceFeaturesRequest\siteFeatures;

class ModifyInstanceFeaturesRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var siteFeatures[]
     */
    public $siteFeatures;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'siteFeatures' => 'SiteFeatures',
    ];

    public function validate()
    {
        if (\is_array($this->siteFeatures)) {
            Model::validateArray($this->siteFeatures);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->siteFeatures) {
            if (\is_array($this->siteFeatures)) {
                $res['SiteFeatures'] = [];
                $n1 = 0;
                foreach ($this->siteFeatures as $item1) {
                    $res['SiteFeatures'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['SiteFeatures'])) {
            if (!empty($map['SiteFeatures'])) {
                $model->siteFeatures = [];
                $n1 = 0;
                foreach ($map['SiteFeatures'] as $item1) {
                    $model->siteFeatures[$n1] = siteFeatures::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
