<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayServiceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
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
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string[]
     */
    public $ips;

    /**
     * @var string
     */
    public $metaInfo;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $serviceNameInRegistry;

    /**
     * @var int
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'gatewayId' => 'GatewayId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'groupName' => 'GroupName',
        'id' => 'Id',
        'ips' => 'Ips',
        'metaInfo' => 'MetaInfo',
        'name' => 'Name',
        'namespace' => 'Namespace',
        'serviceNameInRegistry' => 'ServiceNameInRegistry',
        'sourceId' => 'SourceId',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
        if (\is_array($this->ips)) {
            Model::validateArray($this->ips);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->ips) {
            if (\is_array($this->ips)) {
                $res['Ips'] = [];
                $n1 = 0;
                foreach ($this->ips as $item1) {
                    $res['Ips'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metaInfo) {
            $res['MetaInfo'] = $this->metaInfo;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->serviceNameInRegistry) {
            $res['ServiceNameInRegistry'] = $this->serviceNameInRegistry;
        }

        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Ips'])) {
            if (!empty($map['Ips'])) {
                $model->ips = [];
                $n1 = 0;
                foreach ($map['Ips'] as $item1) {
                    $model->ips[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MetaInfo'])) {
            $model->metaInfo = $map['MetaInfo'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['ServiceNameInRegistry'])) {
            $model->serviceNameInRegistry = $map['ServiceNameInRegistry'];
        }

        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
