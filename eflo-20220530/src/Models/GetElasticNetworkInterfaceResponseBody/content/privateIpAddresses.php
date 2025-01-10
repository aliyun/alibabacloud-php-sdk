<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetElasticNetworkInterfaceResponseBody\content;

use AlibabaCloud\Tea\Model;

class privateIpAddresses extends Model
{
    /**
     * @description The instance description.
     *
     * @example Description
     *
     * @var string
     */
    public $description;

    /**
     * @description Lingjun Elastic Network Interface ID
     *
     * @example leni-1234****
     *
     * @var string
     */
    public $elasticNetworkInterfaceId;

    /**
     * @description The time when the data address was created.
     *
     * @example 1672971789000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the cluster was updated.
     *
     * @example 1672971789000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description Lingjun Elastic Network Interface Secondary Private IP Unique Identifier
     *
     * @example sip-ywz****
     *
     * @var string
     */
    public $ipName;

    /**
     * @description The returned message.
     *
     * @example Successful
     *
     * @var string
     */
    public $message;

    /**
     * @description Lingjun Elastic Network Interface secondary private IP address
     *
     * @example 172.16.****
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description The region ID.
     *
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the intervention entry. Valid value:
     *
     * @example Available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'description'               => 'Description',
        'elasticNetworkInterfaceId' => 'ElasticNetworkInterfaceId',
        'gmtCreate'                 => 'GmtCreate',
        'gmtModified'               => 'GmtModified',
        'ipName'                    => 'IpName',
        'message'                   => 'Message',
        'privateIpAddress'          => 'PrivateIpAddress',
        'regionId'                  => 'RegionId',
        'status'                    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->elasticNetworkInterfaceId) {
            $res['ElasticNetworkInterfaceId'] = $this->elasticNetworkInterfaceId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->ipName) {
            $res['IpName'] = $this->ipName;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privateIpAddresses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ElasticNetworkInterfaceId'])) {
            $model->elasticNetworkInterfaceId = $map['ElasticNetworkInterfaceId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['IpName'])) {
            $model->ipName = $map['IpName'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
