<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ListLinksRequest extends Model
{
    /**
     * @var string
     */
    public $deviceNameA;

    /**
     * @var string
     */
    public $deviceNameB;

    /**
     * @var string
     */
    public $ipA;

    /**
     * @var string
     */
    public $ipB;

    /**
     * @var string
     */
    public $linkName;

    /**
     * @var string
     */
    public $linkNo;

    /**
     * @var string
     */
    public $linkStatus;

    /**
     * @var string
     */
    public $linkType;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $portA;

    /**
     * @var string
     */
    public $portB;
    protected $_name = [
        'deviceNameA' => 'DeviceNameA',
        'deviceNameB' => 'DeviceNameB',
        'ipA'         => 'IpA',
        'ipB'         => 'IpB',
        'linkName'    => 'LinkName',
        'linkNo'      => 'LinkNo',
        'linkStatus'  => 'LinkStatus',
        'linkType'    => 'LinkType',
        'maxResults'  => 'MaxResults',
        'nextToken'   => 'NextToken',
        'portA'       => 'PortA',
        'portB'       => 'PortB',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceNameA) {
            $res['DeviceNameA'] = $this->deviceNameA;
        }
        if (null !== $this->deviceNameB) {
            $res['DeviceNameB'] = $this->deviceNameB;
        }
        if (null !== $this->ipA) {
            $res['IpA'] = $this->ipA;
        }
        if (null !== $this->ipB) {
            $res['IpB'] = $this->ipB;
        }
        if (null !== $this->linkName) {
            $res['LinkName'] = $this->linkName;
        }
        if (null !== $this->linkNo) {
            $res['LinkNo'] = $this->linkNo;
        }
        if (null !== $this->linkStatus) {
            $res['LinkStatus'] = $this->linkStatus;
        }
        if (null !== $this->linkType) {
            $res['LinkType'] = $this->linkType;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->portA) {
            $res['PortA'] = $this->portA;
        }
        if (null !== $this->portB) {
            $res['PortB'] = $this->portB;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLinksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceNameA'])) {
            $model->deviceNameA = $map['DeviceNameA'];
        }
        if (isset($map['DeviceNameB'])) {
            $model->deviceNameB = $map['DeviceNameB'];
        }
        if (isset($map['IpA'])) {
            $model->ipA = $map['IpA'];
        }
        if (isset($map['IpB'])) {
            $model->ipB = $map['IpB'];
        }
        if (isset($map['LinkName'])) {
            $model->linkName = $map['LinkName'];
        }
        if (isset($map['LinkNo'])) {
            $model->linkNo = $map['LinkNo'];
        }
        if (isset($map['LinkStatus'])) {
            $model->linkStatus = $map['LinkStatus'];
        }
        if (isset($map['LinkType'])) {
            $model->linkType = $map['LinkType'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PortA'])) {
            $model->portA = $map['PortA'];
        }
        if (isset($map['PortB'])) {
            $model->portB = $map['PortB'];
        }

        return $model;
    }
}
