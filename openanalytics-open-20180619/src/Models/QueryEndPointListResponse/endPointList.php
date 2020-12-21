<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\QueryEndPointListResponse;

use AlibabaCloud\Tea\Model;

class endPointList extends Model
{
    /**
     * @var string
     */
    public $endPointID;

    /**
     * @var string
     */
    public $zone;

    /**
     * @var string
     */
    public $vSwitch;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vpcID;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $domainURL;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $allowIP;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $product;
    protected $_name = [
        'endPointID'  => 'endPointID',
        'zone'        => 'zone',
        'vSwitch'     => 'vSwitch',
        'status'      => 'status',
        'vpcID'       => 'vpcID',
        'host'        => 'host',
        'domainURL'   => 'domainURL',
        'networkType' => 'networkType',
        'allowIP'     => 'allowIP',
        'port'        => 'port',
        'product'     => 'product',
    ];

    public function validate()
    {
        Model::validateRequired('endPointID', $this->endPointID, true);
        Model::validateRequired('zone', $this->zone, true);
        Model::validateRequired('vSwitch', $this->vSwitch, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('vpcID', $this->vpcID, true);
        Model::validateRequired('host', $this->host, true);
        Model::validateRequired('domainURL', $this->domainURL, true);
        Model::validateRequired('networkType', $this->networkType, true);
        Model::validateRequired('allowIP', $this->allowIP, true);
        Model::validateRequired('port', $this->port, true);
        Model::validateRequired('product', $this->product, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endPointID) {
            $res['endPointID'] = $this->endPointID;
        }
        if (null !== $this->zone) {
            $res['zone'] = $this->zone;
        }
        if (null !== $this->vSwitch) {
            $res['vSwitch'] = $this->vSwitch;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->vpcID) {
            $res['vpcID'] = $this->vpcID;
        }
        if (null !== $this->host) {
            $res['host'] = $this->host;
        }
        if (null !== $this->domainURL) {
            $res['domainURL'] = $this->domainURL;
        }
        if (null !== $this->networkType) {
            $res['networkType'] = $this->networkType;
        }
        if (null !== $this->allowIP) {
            $res['allowIP'] = $this->allowIP;
        }
        if (null !== $this->port) {
            $res['port'] = $this->port;
        }
        if (null !== $this->product) {
            $res['product'] = $this->product;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endPointList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endPointID'])) {
            $model->endPointID = $map['endPointID'];
        }
        if (isset($map['zone'])) {
            $model->zone = $map['zone'];
        }
        if (isset($map['vSwitch'])) {
            $model->vSwitch = $map['vSwitch'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['vpcID'])) {
            $model->vpcID = $map['vpcID'];
        }
        if (isset($map['host'])) {
            $model->host = $map['host'];
        }
        if (isset($map['domainURL'])) {
            $model->domainURL = $map['domainURL'];
        }
        if (isset($map['networkType'])) {
            $model->networkType = $map['networkType'];
        }
        if (isset($map['allowIP'])) {
            $model->allowIP = $map['allowIP'];
        }
        if (isset($map['port'])) {
            $model->port = $map['port'];
        }
        if (isset($map['product'])) {
            $model->product = $map['product'];
        }

        return $model;
    }
}
