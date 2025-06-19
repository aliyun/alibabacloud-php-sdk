<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListServiceSourceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListServiceSourceResponseBody\data\ingressOptions;

class data extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var int
     */
    public $bindingWithGateway;

    /**
     * @var int
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string[]
     */
    public $groupList;

    /**
     * @var int
     */
    public $id;

    /**
     * @var ingressOptions
     */
    public $ingressOptions;

    /**
     * @var bool
     */
    public $invalid;

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
    public $sourceUniqueId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'address' => 'Address',
        'bindingWithGateway' => 'BindingWithGateway',
        'gatewayId' => 'GatewayId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'groupList' => 'GroupList',
        'id' => 'Id',
        'ingressOptions' => 'IngressOptions',
        'invalid' => 'Invalid',
        'name' => 'Name',
        'pathList' => 'PathList',
        'source' => 'Source',
        'sourceUniqueId' => 'SourceUniqueId',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->groupList)) {
            Model::validateArray($this->groupList);
        }
        if (null !== $this->ingressOptions) {
            $this->ingressOptions->validate();
        }
        if (\is_array($this->pathList)) {
            Model::validateArray($this->pathList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->bindingWithGateway) {
            $res['BindingWithGateway'] = $this->bindingWithGateway;
        }

        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }

        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
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

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->ingressOptions) {
            $res['IngressOptions'] = null !== $this->ingressOptions ? $this->ingressOptions->toArray($noStream) : $this->ingressOptions;
        }

        if (null !== $this->invalid) {
            $res['Invalid'] = $this->invalid;
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

        if (null !== $this->sourceUniqueId) {
            $res['SourceUniqueId'] = $this->sourceUniqueId;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['BindingWithGateway'])) {
            $model->bindingWithGateway = $map['BindingWithGateway'];
        }

        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }

        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
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

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IngressOptions'])) {
            $model->ingressOptions = ingressOptions::fromMap($map['IngressOptions']);
        }

        if (isset($map['Invalid'])) {
            $model->invalid = $map['Invalid'];
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

        if (isset($map['SourceUniqueId'])) {
            $model->sourceUniqueId = $map['SourceUniqueId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
