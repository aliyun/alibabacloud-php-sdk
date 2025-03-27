<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateVirtualResourceRequest\resources;

class CreateVirtualResourceRequest extends Model
{
    /**
     * @var bool
     */
    public $disableSpotProtectionPeriod;

    /**
     * @var resources[]
     */
    public $resources;

    /**
     * @var string
     */
    public $virtualResourceName;
    protected $_name = [
        'disableSpotProtectionPeriod' => 'DisableSpotProtectionPeriod',
        'resources' => 'Resources',
        'virtualResourceName' => 'VirtualResourceName',
    ];

    public function validate()
    {
        if (\is_array($this->resources)) {
            Model::validateArray($this->resources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disableSpotProtectionPeriod) {
            $res['DisableSpotProtectionPeriod'] = $this->disableSpotProtectionPeriod;
        }

        if (null !== $this->resources) {
            if (\is_array($this->resources)) {
                $res['Resources'] = [];
                $n1 = 0;
                foreach ($this->resources as $item1) {
                    $res['Resources'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->virtualResourceName) {
            $res['VirtualResourceName'] = $this->virtualResourceName;
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
        if (isset($map['DisableSpotProtectionPeriod'])) {
            $model->disableSpotProtectionPeriod = $map['DisableSpotProtectionPeriod'];
        }

        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n1 = 0;
                foreach ($map['Resources'] as $item1) {
                    $model->resources[$n1++] = resources::fromMap($item1);
                }
            }
        }

        if (isset($map['VirtualResourceName'])) {
            $model->virtualResourceName = $map['VirtualResourceName'];
        }

        return $model;
    }
}
