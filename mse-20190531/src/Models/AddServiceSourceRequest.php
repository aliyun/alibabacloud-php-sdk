<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddServiceSourceRequest\ingressOptionsRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddServiceSourceRequest\toAuthorizeSecurityGroups;

class AddServiceSourceRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @var string[]
     */
    public $groupList;

    /**
     * @var ingressOptionsRequest
     */
    public $ingressOptionsRequest;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $pathList;

    /**
     * @var string
     */
    public $source;

    /**
     * @var toAuthorizeSecurityGroups[]
     */
    public $toAuthorizeSecurityGroups;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'address' => 'Address',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'groupList' => 'GroupList',
        'ingressOptionsRequest' => 'IngressOptionsRequest',
        'name' => 'Name',
        'pathList' => 'PathList',
        'source' => 'Source',
        'toAuthorizeSecurityGroups' => 'ToAuthorizeSecurityGroups',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->groupList)) {
            Model::validateArray($this->groupList);
        }
        if (null !== $this->ingressOptionsRequest) {
            $this->ingressOptionsRequest->validate();
        }
        if (\is_array($this->pathList)) {
            Model::validateArray($this->pathList);
        }
        if (\is_array($this->toAuthorizeSecurityGroups)) {
            Model::validateArray($this->toAuthorizeSecurityGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }

        if (null !== $this->groupList) {
            if (\is_array($this->groupList)) {
                $res['GroupList'] = [];
                $n1 = 0;
                foreach ($this->groupList as $item1) {
                    $res['GroupList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ingressOptionsRequest) {
            $res['IngressOptionsRequest'] = null !== $this->ingressOptionsRequest ? $this->ingressOptionsRequest->toArray($noStream) : $this->ingressOptionsRequest;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pathList) {
            if (\is_array($this->pathList)) {
                $res['PathList'] = [];
                $n1 = 0;
                foreach ($this->pathList as $item1) {
                    $res['PathList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->toAuthorizeSecurityGroups) {
            if (\is_array($this->toAuthorizeSecurityGroups)) {
                $res['ToAuthorizeSecurityGroups'] = [];
                $n1 = 0;
                foreach ($this->toAuthorizeSecurityGroups as $item1) {
                    $res['ToAuthorizeSecurityGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }

        if (isset($map['GroupList'])) {
            if (!empty($map['GroupList'])) {
                $model->groupList = [];
                $n1 = 0;
                foreach ($map['GroupList'] as $item1) {
                    $model->groupList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IngressOptionsRequest'])) {
            $model->ingressOptionsRequest = ingressOptionsRequest::fromMap($map['IngressOptionsRequest']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PathList'])) {
            if (!empty($map['PathList'])) {
                $model->pathList = [];
                $n1 = 0;
                foreach ($map['PathList'] as $item1) {
                    $model->pathList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['ToAuthorizeSecurityGroups'])) {
            if (!empty($map['ToAuthorizeSecurityGroups'])) {
                $model->toAuthorizeSecurityGroups = [];
                $n1 = 0;
                foreach ($map['ToAuthorizeSecurityGroups'] as $item1) {
                    $model->toAuthorizeSecurityGroups[$n1] = toAuthorizeSecurityGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
