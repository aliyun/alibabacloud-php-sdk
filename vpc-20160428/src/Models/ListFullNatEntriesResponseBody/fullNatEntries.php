<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListFullNatEntriesResponseBody;

use AlibabaCloud\Tea\Model;

class fullNatEntries extends Model
{
    /**
     * @description The protocol of the packets that are forwarded. Valid values:
     *
     *   **TCP**
     *   **UDP**
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $accessIp;

    /**
     * @description The ID of the ENI.
     *
     * @example 80
     *
     * @var string
     */
    public $accessPort;

    /**
     * @description The status of the FULLNAT entry. Valid values:
     *
     *   **Pending**: The FULLNAT entry is being configured.
     *   **Available**: The FULLNAT entry is available.
     *   **Deleting**: The FULLNAT entry is being deleted.
     *   **Deleted**: The FULLNAT entry is deleted.
     *
     * @example 2021-10-27T02:44:40Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the FULLNAT entry.
     *
     * @example abc
     *
     * @var string
     */
    public $fullNatEntryDescription;

    /**
     * @description The ID of the FULLNAT table to which the FULLNAT entry belongs.
     *
     * @example fullnat-gw8fz23jezpbblf1j****
     *
     * @var string
     */
    public $fullNatEntryId;

    /**
     * @description The time when the FULLNAT entry was created.
     *
     * @example test
     *
     * @var string
     */
    public $fullNatEntryName;

    /**
     * @example Available
     *
     * @var string
     */
    public $fullNatEntryStatus;

    /**
     * @example fulltb-gw88z7hhlv43rmb26****
     *
     * @var string
     */
    public $fullNatTableId;

    /**
     * @description The type of the ENI. The value is set to **Endpoint**, which indicates a reverse endpoint.
     *
     * @example TCP
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @description The backend IP address that is used for FULLNAT address translation in FULLNAT entries.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $natIp;

    /**
     * @description The backend port that is used for port mapping in FULLNAT entries. Valid values: **1** to **65535**.
     *
     * @example 80
     *
     * @var string
     */
    public $natIpPort;

    /**
     * @description The name of the FULLNAT entry.
     *
     * The name must be 2 to 128 characters in length and can contain letters, digits, underscores (\_), and hyphens (-). The name must start with a letter.
     * @example eni-gw80wedm8pq0tpr2****
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @description The description of the FULLNAT entry.
     *
     * The name must be 2 to 128 characters in length. It must start with a letter but cannot start with `http://` or `https://`.
     * @example Endpoint
     *
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
        'fullNatTableId'          => 'FullNatTableId',
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
        if (null !== $this->fullNatTableId) {
            $res['FullNatTableId'] = $this->fullNatTableId;
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
        if (isset($map['FullNatTableId'])) {
            $model->fullNatTableId = $map['FullNatTableId'];
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
