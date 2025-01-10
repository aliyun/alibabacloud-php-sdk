<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetLeniPrivateIpAddressResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description The description.
     *
     * @example zhenyuan wdl workflow
     *
     * @var string
     */
    public $description;

    /**
     * @description Lingjun Elastic Network Interface ID.
     *
     * @example leni-1234****
     *
     * @var string
     */
    public $elasticNetworkInterfaceId;

    /**
     * @description The time when the activation code was created.
     *
     * @example 1663722356000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the certificate was updated.
     *
     * @example 1635231890000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description Lingjun Elastic Network Interface secondary private IP unique identifier.
     *
     * @example sip-8ylg****
     *
     * @var string
     */
    public $ipName;

    /**
     * @description The returned message.
     *
     * @example message
     *
     * @var string
     */
    public $message;

    /**
     * @description Lingjun Elastic Network Interface secondary private IP address.
     *
     * @example 10.42.****
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
     * @description The task status.
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
     * @return content
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
