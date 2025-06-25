<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest\network\domainRules;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest\network\routes;

class network extends Model
{
    /**
     * @var domainRules[]
     */
    public $domainRules;

    /**
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
     * @var string
     */
    public $strategyType;

    /**
     * @var string[]
     */
    public $vSwitchIds;
    protected $_name = [
        'domainRules' => 'DomainRules',
        'ipExpireMinutes' => 'IpExpireMinutes',
        'officeSiteId' => 'OfficeSiteId',
        'routes' => 'Routes',
        'strategyType' => 'StrategyType',
        'vSwitchIds' => 'VSwitchIds',
    ];

    public function validate()
    {
        if (\is_array($this->domainRules)) {
            Model::validateArray($this->domainRules);
        }
        if (\is_array($this->routes)) {
            Model::validateArray($this->routes);
        }
        if (\is_array($this->vSwitchIds)) {
            Model::validateArray($this->vSwitchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainRules) {
            if (\is_array($this->domainRules)) {
                $res['DomainRules'] = [];
                $n1 = 0;
                foreach ($this->domainRules as $item1) {
                    $res['DomainRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->routes)) {
                $res['Routes'] = [];
                $n1 = 0;
                foreach ($this->routes as $item1) {
                    $res['Routes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->strategyType) {
            $res['StrategyType'] = $this->strategyType;
        }

        if (null !== $this->vSwitchIds) {
            if (\is_array($this->vSwitchIds)) {
                $res['VSwitchIds'] = [];
                $n1 = 0;
                foreach ($this->vSwitchIds as $item1) {
                    $res['VSwitchIds'][$n1] = $item1;
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
        if (isset($map['DomainRules'])) {
            if (!empty($map['DomainRules'])) {
                $model->domainRules = [];
                $n1 = 0;
                foreach ($map['DomainRules'] as $item1) {
                    $model->domainRules[$n1] = domainRules::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['Routes'] as $item1) {
                    $model->routes[$n1] = routes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['StrategyType'])) {
            $model->strategyType = $map['StrategyType'];
        }

        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = [];
                $n1 = 0;
                foreach ($map['VSwitchIds'] as $item1) {
                    $model->vSwitchIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
