<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeIpControlPolicyItemsResponseBody\ipControlPolicyItems;

use AlibabaCloud\Tea\Model;

class ipControlPolicyItem extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 11112
     *
     * @var string
     */
    public $appId;

    /**
     * @description The IP addresses or CIDR blocks.
     *
     * @example 113.125.XX.XX;101.11.XX.XX
     *
     * @var string
     */
    public $cidrIp;

    /**
     * @description The time when the policy was created. The time is displayed in UTC.
     *
     * @example 2018-01-17T06:20:08Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the policy was modified. The time is displayed in UTC.
     *
     * @example 2018-01-17T06:25:13Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The ID of the policy.
     *
     * @example P151617000829241
     *
     * @var string
     */
    public $policyItemId;
    protected $_name = [
        'appId'        => 'AppId',
        'cidrIp'       => 'CidrIp',
        'createTime'   => 'CreateTime',
        'modifiedTime' => 'ModifiedTime',
        'policyItemId' => 'PolicyItemId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->cidrIp) {
            $res['CidrIp'] = $this->cidrIp;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->policyItemId) {
            $res['PolicyItemId'] = $this->policyItemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipControlPolicyItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CidrIp'])) {
            $model->cidrIp = $map['CidrIp'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['PolicyItemId'])) {
            $model->policyItemId = $map['PolicyItemId'];
        }

        return $model;
    }
}
