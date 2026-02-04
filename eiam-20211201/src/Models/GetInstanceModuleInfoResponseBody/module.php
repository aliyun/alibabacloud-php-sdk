<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceModuleInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceModuleInfoResponseBody\module\features;

class module extends Model
{
    /**
     * @var features[]
     */
    public $features;

    /**
     * @var string
     */
    public $moduleKey;

    /**
     * @var string
     */
    public $moduleStatus;
    protected $_name = [
        'features' => 'Features',
        'moduleKey' => 'ModuleKey',
        'moduleStatus' => 'ModuleStatus',
    ];

    public function validate()
    {
        if (\is_array($this->features)) {
            Model::validateArray($this->features);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->features) {
            if (\is_array($this->features)) {
                $res['Features'] = [];
                $n1 = 0;
                foreach ($this->features as $item1) {
                    $res['Features'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->moduleKey) {
            $res['ModuleKey'] = $this->moduleKey;
        }

        if (null !== $this->moduleStatus) {
            $res['ModuleStatus'] = $this->moduleStatus;
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
        if (isset($map['Features'])) {
            if (!empty($map['Features'])) {
                $model->features = [];
                $n1 = 0;
                foreach ($map['Features'] as $item1) {
                    $model->features[$n1] = features::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ModuleKey'])) {
            $model->moduleKey = $map['ModuleKey'];
        }

        if (isset($map['ModuleStatus'])) {
            $model->moduleStatus = $map['ModuleStatus'];
        }

        return $model;
    }
}
