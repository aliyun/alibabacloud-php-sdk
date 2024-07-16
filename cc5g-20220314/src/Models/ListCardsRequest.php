<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\Tea\Model;

class ListCardsRequest extends Model
{
    /**
     * @example bjaliyun01s.5gbj.bjiot
     *
     * @var string
     */
    public $apn;

    /**
     * @example 8909123123121912
     *
     * @var string
     */
    public $iccid;

    /**
     * @var string[]
     */
    public $iccids;

    /**
     * @example 10.0.0.1
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @example true
     *
     * @var bool
     */
    public $lock;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 1441204374591
     *
     * @var string
     */
    public $msisdn;

    /**
     * @example cciot-xxxx
     *
     * @var string
     */
    public $netLinkId;

    /**
     * @example iou001238joojjaere
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example true
     *
     * @var bool
     */
    public $online;

    /**
     * @var string[]
     */
    public $statuses;

    /**
     * @description This parameter is required.
     *
     * @example cc5g-xxxx
     *
     * @var string
     */
    public $wirelessCloudConnectorId;
    protected $_name = [
        'apn'                      => 'Apn',
        'iccid'                    => 'Iccid',
        'iccids'                   => 'Iccids',
        'ipAddress'                => 'IpAddress',
        'lock'                     => 'Lock',
        'maxResults'               => 'MaxResults',
        'msisdn'                   => 'Msisdn',
        'netLinkId'                => 'NetLinkId',
        'nextToken'                => 'NextToken',
        'online'                   => 'Online',
        'statuses'                 => 'Statuses',
        'wirelessCloudConnectorId' => 'WirelessCloudConnectorId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apn) {
            $res['Apn'] = $this->apn;
        }
        if (null !== $this->iccid) {
            $res['Iccid'] = $this->iccid;
        }
        if (null !== $this->iccids) {
            $res['Iccids'] = $this->iccids;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->lock) {
            $res['Lock'] = $this->lock;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->msisdn) {
            $res['Msisdn'] = $this->msisdn;
        }
        if (null !== $this->netLinkId) {
            $res['NetLinkId'] = $this->netLinkId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }
        if (null !== $this->statuses) {
            $res['Statuses'] = $this->statuses;
        }
        if (null !== $this->wirelessCloudConnectorId) {
            $res['WirelessCloudConnectorId'] = $this->wirelessCloudConnectorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCardsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Apn'])) {
            $model->apn = $map['Apn'];
        }
        if (isset($map['Iccid'])) {
            $model->iccid = $map['Iccid'];
        }
        if (isset($map['Iccids'])) {
            if (!empty($map['Iccids'])) {
                $model->iccids = $map['Iccids'];
            }
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['Lock'])) {
            $model->lock = $map['Lock'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Msisdn'])) {
            $model->msisdn = $map['Msisdn'];
        }
        if (isset($map['NetLinkId'])) {
            $model->netLinkId = $map['NetLinkId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }
        if (isset($map['Statuses'])) {
            if (!empty($map['Statuses'])) {
                $model->statuses = $map['Statuses'];
            }
        }
        if (isset($map['WirelessCloudConnectorId'])) {
            $model->wirelessCloudConnectorId = $map['WirelessCloudConnectorId'];
        }

        return $model;
    }
}
