<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\GetServiceLastAccessedDetailsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetServiceLastAccessedDetailsResponseBody\servicesLastAccessed\grantPolicies;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetServiceLastAccessedDetailsResponseBody\servicesLastAccessed\trackedActionsLastAccessed;

class servicesLastAccessed extends Model
{
    /**
     * @var grantPolicies[]
     */
    public $grantPolicies;

    /**
     * @var string
     */
    public $lastAuthenticated;

    /**
     * @var string
     */
    public $lastAuthenticatedEntity;

    /**
     * @var string
     */
    public $RAMCode;

    /**
     * @var string[]
     */
    public $serviceCodes;

    /**
     * @var int
     */
    public $totalAuthenticatedEntities;

    /**
     * @var trackedActionsLastAccessed[]
     */
    public $trackedActionsLastAccessed;
    protected $_name = [
        'grantPolicies' => 'GrantPolicies',
        'lastAuthenticated' => 'LastAuthenticated',
        'lastAuthenticatedEntity' => 'LastAuthenticatedEntity',
        'RAMCode' => 'RAMCode',
        'serviceCodes' => 'ServiceCodes',
        'totalAuthenticatedEntities' => 'TotalAuthenticatedEntities',
        'trackedActionsLastAccessed' => 'TrackedActionsLastAccessed',
    ];

    public function validate()
    {
        if (\is_array($this->grantPolicies)) {
            Model::validateArray($this->grantPolicies);
        }
        if (\is_array($this->serviceCodes)) {
            Model::validateArray($this->serviceCodes);
        }
        if (\is_array($this->trackedActionsLastAccessed)) {
            Model::validateArray($this->trackedActionsLastAccessed);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->grantPolicies) {
            if (\is_array($this->grantPolicies)) {
                $res['GrantPolicies'] = [];
                $n1 = 0;
                foreach ($this->grantPolicies as $item1) {
                    $res['GrantPolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lastAuthenticated) {
            $res['LastAuthenticated'] = $this->lastAuthenticated;
        }

        if (null !== $this->lastAuthenticatedEntity) {
            $res['LastAuthenticatedEntity'] = $this->lastAuthenticatedEntity;
        }

        if (null !== $this->RAMCode) {
            $res['RAMCode'] = $this->RAMCode;
        }

        if (null !== $this->serviceCodes) {
            if (\is_array($this->serviceCodes)) {
                $res['ServiceCodes'] = [];
                $n1 = 0;
                foreach ($this->serviceCodes as $item1) {
                    $res['ServiceCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalAuthenticatedEntities) {
            $res['TotalAuthenticatedEntities'] = $this->totalAuthenticatedEntities;
        }

        if (null !== $this->trackedActionsLastAccessed) {
            if (\is_array($this->trackedActionsLastAccessed)) {
                $res['TrackedActionsLastAccessed'] = [];
                $n1 = 0;
                foreach ($this->trackedActionsLastAccessed as $item1) {
                    $res['TrackedActionsLastAccessed'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['GrantPolicies'])) {
            if (!empty($map['GrantPolicies'])) {
                $model->grantPolicies = [];
                $n1 = 0;
                foreach ($map['GrantPolicies'] as $item1) {
                    $model->grantPolicies[$n1] = grantPolicies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LastAuthenticated'])) {
            $model->lastAuthenticated = $map['LastAuthenticated'];
        }

        if (isset($map['LastAuthenticatedEntity'])) {
            $model->lastAuthenticatedEntity = $map['LastAuthenticatedEntity'];
        }

        if (isset($map['RAMCode'])) {
            $model->RAMCode = $map['RAMCode'];
        }

        if (isset($map['ServiceCodes'])) {
            if (!empty($map['ServiceCodes'])) {
                $model->serviceCodes = [];
                $n1 = 0;
                foreach ($map['ServiceCodes'] as $item1) {
                    $model->serviceCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalAuthenticatedEntities'])) {
            $model->totalAuthenticatedEntities = $map['TotalAuthenticatedEntities'];
        }

        if (isset($map['TrackedActionsLastAccessed'])) {
            if (!empty($map['TrackedActionsLastAccessed'])) {
                $model->trackedActionsLastAccessed = [];
                $n1 = 0;
                foreach ($map['TrackedActionsLastAccessed'] as $item1) {
                    $model->trackedActionsLastAccessed[$n1] = trackedActionsLastAccessed::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
