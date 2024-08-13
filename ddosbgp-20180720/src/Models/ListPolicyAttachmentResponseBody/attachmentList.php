<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListPolicyAttachmentResponseBody;

use AlibabaCloud\Tea\Model;

class attachmentList extends Model
{
    /**
     * @description The IP address of the protected object.
     *
     * @example 147.139.183.***
     *
     * @var string
     */
    public $ip;

    /**
     * @description The UID of the member to which the IP address of the protected object belongs.
     *
     * @example 177699790631****
     *
     * @var string
     */
    public $memberUid;

    /**
     * @description The ID of the policy.
     *
     * @example 1b43f44e-65e1-411a-b0c0-d6c1********
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The name of the rule.
     *
     * @example test**
     *
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $policyRemark;

    /**
     * @description The type of the policy. Valid values:
     *
     *   **l3**: IP-specific mitigation policies.
     *   **l4**: port-specific mitigation policies.
     *
     * @example l3
     *
     * @var string
     */
    public $policyType;

    /**
     * @description The port number of the protected object.
     *
     * @example 8*
     *
     * @var int
     */
    public $port;

    /**
     * @description The protocol type of the protected object. Valid values:
     *
     *   **tcp**
     *   **udp**
     *
     * @example udp
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The region to which the IP address of the protected object belongs.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'ip'           => 'Ip',
        'memberUid'    => 'MemberUid',
        'policyId'     => 'PolicyId',
        'policyName'   => 'PolicyName',
        'policyRemark' => 'PolicyRemark',
        'policyType'   => 'PolicyType',
        'port'         => 'Port',
        'protocol'     => 'Protocol',
        'region'       => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->policyRemark) {
            $res['PolicyRemark'] = $this->policyRemark;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attachmentList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PolicyRemark'])) {
            $model->policyRemark = $map['PolicyRemark'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
