<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\SwitchSecurityProxyRequest\natRouteEntryList;

class SwitchSecurityProxyRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var natRouteEntryList[]
     */
    public $natRouteEntryList;

    /**
     * @var string
     */
    public $proxyId;

    /**
     * @var string
     */
    public $routeAction;

    /**
     * @var string
     */
    public $switch;
    protected $_name = [
        'lang' => 'Lang',
        'natRouteEntryList' => 'NatRouteEntryList',
        'proxyId' => 'ProxyId',
        'routeAction' => 'RouteAction',
        'switch' => 'Switch',
    ];

    public function validate()
    {
        if (\is_array($this->natRouteEntryList)) {
            Model::validateArray($this->natRouteEntryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->natRouteEntryList) {
            if (\is_array($this->natRouteEntryList)) {
                $res['NatRouteEntryList'] = [];
                $n1 = 0;
                foreach ($this->natRouteEntryList as $item1) {
                    $res['NatRouteEntryList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->proxyId) {
            $res['ProxyId'] = $this->proxyId;
        }

        if (null !== $this->routeAction) {
            $res['RouteAction'] = $this->routeAction;
        }

        if (null !== $this->switch) {
            $res['Switch'] = $this->switch;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['NatRouteEntryList'])) {
            if (!empty($map['NatRouteEntryList'])) {
                $model->natRouteEntryList = [];
                $n1 = 0;
                foreach ($map['NatRouteEntryList'] as $item1) {
                    $model->natRouteEntryList[$n1] = natRouteEntryList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ProxyId'])) {
            $model->proxyId = $map['ProxyId'];
        }

        if (isset($map['RouteAction'])) {
            $model->routeAction = $map['RouteAction'];
        }

        if (isset($map['Switch'])) {
            $model->switch = $map['Switch'];
        }

        return $model;
    }
}
