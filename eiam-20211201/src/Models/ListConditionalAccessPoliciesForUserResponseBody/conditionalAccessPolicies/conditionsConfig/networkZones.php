<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListConditionalAccessPoliciesForUserResponseBody\conditionalAccessPolicies\conditionsConfig;

use AlibabaCloud\Dara\Model;

class networkZones extends Model
{
    /**
     * @var string[]
     */
    public $excludeNetworkZones;

    /**
     * @var string[]
     */
    public $includeNetworkZones;
    protected $_name = [
        'excludeNetworkZones' => 'ExcludeNetworkZones',
        'includeNetworkZones' => 'IncludeNetworkZones',
    ];

    public function validate()
    {
        if (\is_array($this->excludeNetworkZones)) {
            Model::validateArray($this->excludeNetworkZones);
        }
        if (\is_array($this->includeNetworkZones)) {
            Model::validateArray($this->includeNetworkZones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->excludeNetworkZones) {
            if (\is_array($this->excludeNetworkZones)) {
                $res['ExcludeNetworkZones'] = [];
                $n1 = 0;
                foreach ($this->excludeNetworkZones as $item1) {
                    $res['ExcludeNetworkZones'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->includeNetworkZones) {
            if (\is_array($this->includeNetworkZones)) {
                $res['IncludeNetworkZones'] = [];
                $n1 = 0;
                foreach ($this->includeNetworkZones as $item1) {
                    $res['IncludeNetworkZones'][$n1] = $item1;
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
        if (isset($map['ExcludeNetworkZones'])) {
            if (!empty($map['ExcludeNetworkZones'])) {
                $model->excludeNetworkZones = [];
                $n1 = 0;
                foreach ($map['ExcludeNetworkZones'] as $item1) {
                    $model->excludeNetworkZones[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IncludeNetworkZones'])) {
            if (!empty($map['IncludeNetworkZones'])) {
                $model->includeNetworkZones = [];
                $n1 = 0;
                foreach ($map['IncludeNetworkZones'] as $item1) {
                    $model->includeNetworkZones[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
