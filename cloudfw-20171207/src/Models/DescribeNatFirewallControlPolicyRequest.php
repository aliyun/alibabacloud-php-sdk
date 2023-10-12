<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeNatFirewallControlPolicyRequest extends Model
{
    /**
     * @description The action that Cloud Firewall performs on the traffic.
     *
     * Valid values:
     *
     *   **accept**: allows the traffic.
     *   **drop**: denies the traffic.
     *   **log**: monitors the traffic.
     *
     * @example accept
     *
     * @var string
     */
    public $aclAction;

    /**
     * @description The UUID of the access control policy.
     *
     * @example 303f0697-2a21-4e43-b142-4a77adf7b358
     *
     * @var string
     */
    public $aclUuid;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var string
     */
    public $currentPage;

    /**
     * @description The description of the access control policy. Fuzzy match is supported.
     *
     * > If you do not specify this parameter, the descriptions of all policies are queried.
     * @var string
     */
    public $description;

    /**
     * @description The destination address in the access control policy. Fuzzy match is supported. The value of this parameter varies based on the value of the DestinationType parameter.
     *
     *   If DestinationType is set to `net`, the value of Destination must be a CIDR block. Example: 10.0.3.0/24.
     *   If DestinationType is set to `domain`, the value of Destination must be a domain name. Example: aliyun.
     *   If DestinationType is set to `group`, the value of Destination must be the name of an address book. Example: db_group.
     *   If DestinationType is set to `location`, the value of Destination is a location. For more information about location codes, see [AddControlPolicy](~~474128~~). Example: \["BJ11", "ZB"].
     *
     * > If you do not specify this parameter, all types of destination addresses are queried.
     * @example x.x.x.x/32
     *
     * @var string
     */
    public $destination;

    /**
     * @description The direction of the traffic to which the access control policy applies. Valid values:
     *
     *   **out**: outbound traffic
     *
     * @example out
     *
     * @var string
     */
    public $direction;

    /**
     * @description The language of the content within the response. Valid values:
     *
     *   **zh**: Chinese (default)
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the NAT gateway.
     *
     * @example ngw-xxxxxx
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @description The number of entries per page. Default value: 10.
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The type of the protocol in the access control policy. Valid values:
     *
     *   **TCP**
     *   **UDP**
     *   **ICMP**
     *   **ANY**: all types of protocols
     *
     * > If you do not specify this parameter, access control policies of all protocol types are queried.
     * @example ANY
     *
     * @var string
     */
    public $proto;

    /**
     * @description Specifies whether the access control policy is enabled. By default, an access control policy is enabled after it is created. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var string
     */
    public $release;

    /**
     * @var string
     */
    public $repeatType;

    /**
     * @description The source address in the access control policy. Fuzzy match is supported. The value of this parameter varies based on the value of the SourceType parameter.
     *
     *   If SourceType is set to `net`, the value of Source must be a CIDR block. Example: 192.0.XX.XX/24.
     *   If SourceType is set to `group`, the value of Source must be the name of an address book. Example: db_group. If the db_group address book does not contain addresses, all source addresses are queried.
     *   If SourceType is set to `location`, the value of Source must be a location. Example: beijing.
     *
     * > If you do not specify this parameter, all types of source addresses are queried.
     * @example 1.1.1.1/32
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'aclAction'    => 'AclAction',
        'aclUuid'      => 'AclUuid',
        'currentPage'  => 'CurrentPage',
        'description'  => 'Description',
        'destination'  => 'Destination',
        'direction'    => 'Direction',
        'lang'         => 'Lang',
        'natGatewayId' => 'NatGatewayId',
        'pageSize'     => 'PageSize',
        'proto'        => 'Proto',
        'release'      => 'Release',
        'repeatType'   => 'RepeatType',
        'source'       => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclAction) {
            $res['AclAction'] = $this->aclAction;
        }
        if (null !== $this->aclUuid) {
            $res['AclUuid'] = $this->aclUuid;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->proto) {
            $res['Proto'] = $this->proto;
        }
        if (null !== $this->release) {
            $res['Release'] = $this->release;
        }
        if (null !== $this->repeatType) {
            $res['RepeatType'] = $this->repeatType;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNatFirewallControlPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclAction'])) {
            $model->aclAction = $map['AclAction'];
        }
        if (isset($map['AclUuid'])) {
            $model->aclUuid = $map['AclUuid'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Proto'])) {
            $model->proto = $map['Proto'];
        }
        if (isset($map['Release'])) {
            $model->release = $map['Release'];
        }
        if (isset($map['RepeatType'])) {
            $model->repeatType = $map['RepeatType'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
