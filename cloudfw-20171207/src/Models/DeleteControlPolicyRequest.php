<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DeleteControlPolicyRequest extends Model
{
    /**
     * @description The UUID of the access control policy.
     *
     * To delete an access control policy, you must specify the UUID of the policy. You can call the [DescribeControlPolicy](https://help.aliyun.com/document_detail/138866.html) operation to query the UUID.
     *
     * This parameter is required.
     *
     * @example 00281255-d220-4db1-8f4f-c4df221ad84c
     *
     * @var string
     */
    public $aclUuid;

    /**
     * @description The direction of the traffic to which the access control policy applies.
     *
     * Valid values:
     *
     *   **in**: inbound.
     *   **out**: outbound.
     *
     * @example in
     *
     * @var string
     */
    public $direction;

    /**
     * @description The language of the content within the request and response.
     *
     * Valid values:
     *
     *   **zh** (default)
     *   **en**
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The source IP address of the traffic.
     *
     * @example 192.0.XX.XX
     *
     * @deprecated
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'aclUuid' => 'AclUuid',
        'direction' => 'Direction',
        'lang' => 'Lang',
        'sourceIp' => 'SourceIp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclUuid) {
            $res['AclUuid'] = $this->aclUuid;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteControlPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclUuid'])) {
            $model->aclUuid = $map['AclUuid'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
