<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeVpcFirewallControlPolicyRequest extends Model
{
    /**
     * @description The action that Cloud Firewall performs on the traffic. Valid values:
     *
     *   **accept**: allows the traffic.
     *   **drop**: blocks the traffic.
     *   **log**: monitors the traffic.
     *
     * > If you do not specify this parameter, access control policies are queried based on all actions.
     * @example accept
     *
     * @var string
     */
    public $aclAction;

    /**
     * @description The unique ID of the access control policy.
     *
     * @example 4037fbf7-3e39-4634-92a4-d0155247****
     *
     * @var string
     */
    public $aclUuid;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var string
     */
    public $currentPage;

    /**
     * @description The description of the access control policy. Fuzzy match is supported.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The destination address in the access control policy. Fuzzy match is supported.
     *
     * > The value of this parameter can be a CIDR block or an address book name.
     * @example 192.0.XX.XX/24
     *
     * @var string
     */
    public $destination;

    /**
     * @description The language of the content within the request and response.
     *
     * Valid values:
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
     * @description The UID of the member that is managed by your Alibaba Cloud account.
     *
     * @example 258039427902****
     *
     * @var string
     */
    public $memberUid;

    /**
     * @description The number of entries to return on each page.
     *
     * Maximum value: 50.
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The protocol type in the access control policy. Valid values:
     *
     *   **TCP**
     *   **UDP**
     *   **ICMP**
     *   **ANY**: all protocol types
     *
     * > If you do not specify this parameter, access control policies of all protocol types are queried.
     * @example TCP
     *
     * @var string
     */
    public $proto;

    /**
     * @description The status of the access control policy. Valid values:
     *
     *   **true**: enabled
     *   **false**: disabled
     *
     * @example true
     *
     * @var string
     */
    public $release;

    /**
     * @description The recurrence type for the access control policy to take effect. Valid values:
     *
     *   **Permanent** (default): The policy always takes effect.
     *   **None**: The policy takes effect for only once.
     *   **Daily**: The policy takes effect on a daily basis.
     *   **Weekly**: The policy takes effect on a weekly basis.
     *   **Monthly**: The policy takes effect on a monthly basis.
     *
     * @example Permanent
     *
     * @var string
     */
    public $repeatType;

    /**
     * @description The source address in the access control policy. Fuzzy match is supported.
     *
     * > The value of this parameter can be a CIDR block or an address book name.
     * @example 192.0.XX.XX/24
     *
     * @var string
     */
    public $source;

    /**
     * @description The instance ID of the VPC firewall. Valid values:
     *
     *   If the VPC firewall protects the traffic between two VPCs that are connected by using a CEN instance, the value of this parameter must be the ID of the CEN instance.
     *   If the VPC firewall protects the traffic between two VPCs that are connected by using an Express Connect circuit, the value of this parameter must be the instance ID of the VPC firewall.
     *
     * > You can call the [DescribeVpcFirewallAclGroupList](~~159760~~) operation to query the ID.
     * @example vfw-a42bbb7b887148c9****
     *
     * @var string
     */
    public $vpcFirewallId;
    protected $_name = [
        'aclAction'     => 'AclAction',
        'aclUuid'       => 'AclUuid',
        'currentPage'   => 'CurrentPage',
        'description'   => 'Description',
        'destination'   => 'Destination',
        'lang'          => 'Lang',
        'memberUid'     => 'MemberUid',
        'pageSize'      => 'PageSize',
        'proto'         => 'Proto',
        'release'       => 'Release',
        'repeatType'    => 'RepeatType',
        'source'        => 'Source',
        'vpcFirewallId' => 'VpcFirewallId',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
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
        if (null !== $this->vpcFirewallId) {
            $res['VpcFirewallId'] = $this->vpcFirewallId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpcFirewallControlPolicyRequest
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
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
        if (isset($map['VpcFirewallId'])) {
            $model->vpcFirewallId = $map['VpcFirewallId'];
        }

        return $model;
    }
}
