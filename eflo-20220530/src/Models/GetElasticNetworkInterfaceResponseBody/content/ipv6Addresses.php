<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetElasticNetworkInterfaceResponseBody\content;

use AlibabaCloud\Tea\Model;

class ipv6Addresses extends Model
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
     * @example 1585816811000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the cluster was updated.
     *
     * @example 1549012834000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description IPV6 unique identifier
     *
     * @example sip-sg3xabeq
     *
     * @var string
     */
    public $ipName;

    /**
     * @description IPV6 address
     *
     * @example 2408:4005:3aa:1000:470d:66fb:56a5:****
     *
     * @var string
     */
    public $ipv6Address;

    /**
     * @description The error message. (If the instance is in the Exception state, the exception cause is prompted.)
     *
     * @example success
     *
     * @var string
     */
    public $message;

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
        'ipv6Address'               => 'Ipv6Address',
        'message'                   => 'Message',
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
        if (null !== $this->ipv6Address) {
            $res['Ipv6Address'] = $this->ipv6Address;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
     * @return ipv6Addresses
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
        if (isset($map['Ipv6Address'])) {
            $model->ipv6Address = $map['Ipv6Address'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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
