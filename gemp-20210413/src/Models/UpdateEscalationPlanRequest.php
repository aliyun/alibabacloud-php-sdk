<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateEscalationPlanRequest\escalationPlanRules;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateEscalationPlanRequest\escalationPlanScopeObjects;
use AlibabaCloud\Tea\Model;

class UpdateEscalationPlanRequest extends Model
{
    /**
     * @description clientToken
     *
     * @example 6b404f14-77d1-4b53-a1a1-30a58bbcfc57
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $escalationPlanDescription;

    /**
     * @description This parameter is required.
     *
     * @example 433
     *
     * @var int
     */
    public $escalationPlanId;

    /**
     * @example xxx
     *
     * @var string
     */
    public $escalationPlanName;

    /**
     * @var escalationPlanRules[]
     */
    public $escalationPlanRules;

    /**
     * @var escalationPlanScopeObjects[]
     */
    public $escalationPlanScopeObjects;

    /**
     * @var bool
     */
    public $isGlobal;
    protected $_name = [
        'clientToken'                => 'clientToken',
        'escalationPlanDescription'  => 'escalationPlanDescription',
        'escalationPlanId'           => 'escalationPlanId',
        'escalationPlanName'         => 'escalationPlanName',
        'escalationPlanRules'        => 'escalationPlanRules',
        'escalationPlanScopeObjects' => 'escalationPlanScopeObjects',
        'isGlobal'                   => 'isGlobal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->escalationPlanDescription) {
            $res['escalationPlanDescription'] = $this->escalationPlanDescription;
        }
        if (null !== $this->escalationPlanId) {
            $res['escalationPlanId'] = $this->escalationPlanId;
        }
        if (null !== $this->escalationPlanName) {
            $res['escalationPlanName'] = $this->escalationPlanName;
        }
        if (null !== $this->escalationPlanRules) {
            $res['escalationPlanRules'] = [];
            if (null !== $this->escalationPlanRules && \is_array($this->escalationPlanRules)) {
                $n = 0;
                foreach ($this->escalationPlanRules as $item) {
                    $res['escalationPlanRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->escalationPlanScopeObjects) {
            $res['escalationPlanScopeObjects'] = [];
            if (null !== $this->escalationPlanScopeObjects && \is_array($this->escalationPlanScopeObjects)) {
                $n = 0;
                foreach ($this->escalationPlanScopeObjects as $item) {
                    $res['escalationPlanScopeObjects'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->isGlobal) {
            $res['isGlobal'] = $this->isGlobal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEscalationPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['escalationPlanDescription'])) {
            $model->escalationPlanDescription = $map['escalationPlanDescription'];
        }
        if (isset($map['escalationPlanId'])) {
            $model->escalationPlanId = $map['escalationPlanId'];
        }
        if (isset($map['escalationPlanName'])) {
            $model->escalationPlanName = $map['escalationPlanName'];
        }
        if (isset($map['escalationPlanRules'])) {
            if (!empty($map['escalationPlanRules'])) {
                $model->escalationPlanRules = [];
                $n                          = 0;
                foreach ($map['escalationPlanRules'] as $item) {
                    $model->escalationPlanRules[$n++] = null !== $item ? escalationPlanRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['escalationPlanScopeObjects'])) {
            if (!empty($map['escalationPlanScopeObjects'])) {
                $model->escalationPlanScopeObjects = [];
                $n                                 = 0;
                foreach ($map['escalationPlanScopeObjects'] as $item) {
                    $model->escalationPlanScopeObjects[$n++] = null !== $item ? escalationPlanScopeObjects::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['isGlobal'])) {
            $model->isGlobal = $map['isGlobal'];
        }

        return $model;
    }
}
