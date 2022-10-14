<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetSwimLaneGroupListResponseBody;

use AlibabaCloud\Tea\Model;

class swimLaneGroupList extends Model
{
    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $ingressGatewayName;

    /**
     * @var string
     */
    public $ingressType;

    /**
     * @var string
     */
    public $serviceList;
    protected $_name = [
        'groupName'          => 'GroupName',
        'ingressGatewayName' => 'IngressGatewayName',
        'ingressType'        => 'IngressType',
        'serviceList'        => 'ServiceList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->ingressGatewayName) {
            $res['IngressGatewayName'] = $this->ingressGatewayName;
        }
        if (null !== $this->ingressType) {
            $res['IngressType'] = $this->ingressType;
        }
        if (null !== $this->serviceList) {
            $res['ServiceList'] = $this->serviceList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return swimLaneGroupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['IngressGatewayName'])) {
            $model->ingressGatewayName = $map['IngressGatewayName'];
        }
        if (isset($map['IngressType'])) {
            $model->ingressType = $map['IngressType'];
        }
        if (isset($map['ServiceList'])) {
            $model->serviceList = $map['ServiceList'];
        }

        return $model;
    }
}
