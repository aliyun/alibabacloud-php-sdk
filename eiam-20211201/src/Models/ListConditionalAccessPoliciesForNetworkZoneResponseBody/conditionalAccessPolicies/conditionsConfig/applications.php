<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListConditionalAccessPoliciesForNetworkZoneResponseBody\conditionalAccessPolicies\conditionsConfig;

use AlibabaCloud\Dara\Model;

class applications extends Model
{
    /**
     * @var string[]
     */
    public $excludeApplications;

    /**
     * @var string[]
     */
    public $includeApplications;
    protected $_name = [
        'excludeApplications' => 'ExcludeApplications',
        'includeApplications' => 'IncludeApplications',
    ];

    public function validate()
    {
        if (\is_array($this->excludeApplications)) {
            Model::validateArray($this->excludeApplications);
        }
        if (\is_array($this->includeApplications)) {
            Model::validateArray($this->includeApplications);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->excludeApplications) {
            if (\is_array($this->excludeApplications)) {
                $res['ExcludeApplications'] = [];
                $n1 = 0;
                foreach ($this->excludeApplications as $item1) {
                    $res['ExcludeApplications'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->includeApplications) {
            if (\is_array($this->includeApplications)) {
                $res['IncludeApplications'] = [];
                $n1 = 0;
                foreach ($this->includeApplications as $item1) {
                    $res['IncludeApplications'][$n1] = $item1;
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
        if (isset($map['ExcludeApplications'])) {
            if (!empty($map['ExcludeApplications'])) {
                $model->excludeApplications = [];
                $n1 = 0;
                foreach ($map['ExcludeApplications'] as $item1) {
                    $model->excludeApplications[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IncludeApplications'])) {
            if (!empty($map['IncludeApplications'])) {
                $model->includeApplications = [];
                $n1 = 0;
                foreach ($map['IncludeApplications'] as $item1) {
                    $model->includeApplications[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
