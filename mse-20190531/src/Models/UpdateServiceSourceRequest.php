<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateServiceSourceRequest\ingressOptionsRequest;

class UpdateServiceSourceRequest extends Model
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
     * @var int
     */
    public $gatewayId;
    /**
     * @var string
     */
    public $gatewayUniqueId;
    /**
     * @var int
     */
    public $id;
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
     * @var string
     */
    public $type;
    protected $_name = [
        'acceptLanguage'        => 'AcceptLanguage',
        'address'               => 'Address',
        'gatewayId'             => 'GatewayId',
        'gatewayUniqueId'       => 'GatewayUniqueId',
        'id'                    => 'Id',
        'ingressOptionsRequest' => 'IngressOptionsRequest',
        'name'                  => 'Name',
        'pathList'              => 'PathList',
        'source'                => 'Source',
        'type'                  => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->ingressOptionsRequest) {
            $this->ingressOptionsRequest->validate();
        }
        if (\is_array($this->pathList)) {
            Model::validateArray($this->pathList);
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

        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }

        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
                $n1              = 0;
                foreach ($this->pathList as $item1) {
                    $res['PathList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
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

        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }

        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
                $n1              = 0;
                foreach ($map['PathList'] as $item1) {
                    $model->pathList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
