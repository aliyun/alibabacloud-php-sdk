<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest\network\domainRules;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest\network\routes;
use AlibabaCloud\Tea\Model;

class network extends Model
{
    /**
     * @var domainRules[]
     */
    public $domainRules;

    /**
     * @example 60
     *
     * @var int
     */
    public $ipExpireMinutes;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var routes[]
     */
    public $routes;

    /**
     * @example Shared
     *
     * @var string
     */
    public $strategyType;

    /**
     * @var string[]
     */
    public $vSwitchIds;
    protected $_name = [
        'domainRules'     => 'DomainRules',
        'ipExpireMinutes' => 'IpExpireMinutes',
        'officeSiteId'    => 'OfficeSiteId',
        'routes'          => 'Routes',
        'strategyType'    => 'StrategyType',
        'vSwitchIds'      => 'VSwitchIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainRules) {
            $res['DomainRules'] = [];
            if (null !== $this->domainRules && \is_array($this->domainRules)) {
                $n = 0;
                foreach ($this->domainRules as $item) {
                    $res['DomainRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ipExpireMinutes) {
            $res['IpExpireMinutes'] = $this->ipExpireMinutes;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->routes) {
            $res['Routes'] = [];
            if (null !== $this->routes && \is_array($this->routes)) {
                $n = 0;
                foreach ($this->routes as $item) {
                    $res['Routes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->strategyType) {
            $res['StrategyType'] = $this->strategyType;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return network
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainRules'])) {
            if (!empty($map['DomainRules'])) {
                $model->domainRules = [];
                $n                  = 0;
                foreach ($map['DomainRules'] as $item) {
                    $model->domainRules[$n++] = null !== $item ? domainRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IpExpireMinutes'])) {
            $model->ipExpireMinutes = $map['IpExpireMinutes'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['Routes'])) {
            if (!empty($map['Routes'])) {
                $model->routes = [];
                $n             = 0;
                foreach ($map['Routes'] as $item) {
                    $model->routes[$n++] = null !== $item ? routes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StrategyType'])) {
            $model->strategyType = $map['StrategyType'];
        }
        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = $map['VSwitchIds'];
            }
        }

        return $model;
    }
}
