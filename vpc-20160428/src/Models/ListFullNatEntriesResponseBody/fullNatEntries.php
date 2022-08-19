<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListFullNatEntriesResponseBody;

use AlibabaCloud\Tea\Model;

class fullNatEntries extends Model
{
    /**
     * @var string
     */
    public $accessIp;

    /**
     * @var string
     */
    public $accessPort;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $fullNatEntryDescription;

    /**
     * @var string
     */
    public $fullNatEntryId;

    /**
     * @var string
     */
    public $fullNatEntryName;

    /**
     * @var string
     */
    public $fullNatEntryStatus;

    /**
     * @var string
     */
    public $ipProtocol;

    /**
     * @var string
     */
    public $natIp;

    /**
     * @var string
     */
    public $natIpPort;

    /**
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @var string
     */
    public $networkInterfaceType;
    protected $_name = [
        'accessIp'                => 'AccessIp',
        'accessPort'              => 'AccessPort',
        'creationTime'            => 'CreationTime',
        'fullNatEntryDescription' => 'FullNatEntryDescription',
        'fullNatEntryId'          => 'FullNatEntryId',
        'fullNatEntryName'        => 'FullNatEntryName',
        'fullNatEntryStatus'      => 'FullNatEntryStatus',
        'ipProtocol'              => 'IpProtocol',
        'natIp'                   => 'NatIp',
        'natIpPort'               => 'NatIpPort',
        'networkInterfaceId'      => 'NetworkInterfaceId',
        'networkInterfaceType'    => 'NetworkInterfaceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessIp) {
            $res['AccessIp'] = $this->accessIp;
        }
        if (null !== $this->accessPort) {
            $res['AccessPort'] = $this->accessPort;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->fullNatEntryDescription) {
            $res['FullNatEntryDescription'] = $this->fullNatEntryDescription;
        }
        if (null !== $this->fullNatEntryId) {
            $res['FullNatEntryId'] = $this->fullNatEntryId;
        }
        if (null !== $this->fullNatEntryName) {
            $res['FullNatEntryName'] = $this->fullNatEntryName;
        }
        if (null !== $this->fullNatEntryStatus) {
            $res['FullNatEntryStatus'] = $this->fullNatEntryStatus;
        }
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }
        if (null !== $this->natIp) {
            $res['NatIp'] = $this->natIp;
        }
        if (null !== $this->natIpPort) {
            $res['NatIpPort'] = $this->natIpPort;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->networkInterfaceType) {
            $res['NetworkInterfaceType'] = $this->networkInterfaceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fullNatEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessIp'])) {
            $model->accessIp = $map['AccessIp'];
        }
        if (isset($map['AccessPort'])) {
            $model->accessPort = $map['AccessPort'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['FullNatEntryDescription'])) {
            $model->fullNatEntryDescription = $map['FullNatEntryDescription'];
        }
        if (isset($map['FullNatEntryId'])) {
            $model->fullNatEntryId = $map['FullNatEntryId'];
        }
        if (isset($map['FullNatEntryName'])) {
            $model->fullNatEntryName = $map['FullNatEntryName'];
        }
        if (isset($map['FullNatEntryStatus'])) {
            $model->fullNatEntryStatus = $map['FullNatEntryStatus'];
        }
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['NatIp'])) {
            $model->natIp = $map['NatIp'];
        }
        if (isset($map['NatIpPort'])) {
            $model->natIpPort = $map['NatIpPort'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['NetworkInterfaceType'])) {
            $model->networkInterfaceType = $map['NetworkInterfaceType'];
        }

        return $model;
    }
}
