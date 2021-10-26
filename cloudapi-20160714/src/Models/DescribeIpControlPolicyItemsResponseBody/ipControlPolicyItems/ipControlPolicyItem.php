<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeIpControlPolicyItemsResponseBody\ipControlPolicyItems;

use AlibabaCloud\Tea\Model;

class ipControlPolicyItem extends Model
{
    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $policyItemId;

    /**
     * @var string
     */
    public $cidrIp;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $appId;
    protected $_name = [
        'modifiedTime' => 'ModifiedTime',
        'policyItemId' => 'PolicyItemId',
        'cidrIp'       => 'CidrIp',
        'createTime'   => 'CreateTime',
        'appId'        => 'AppId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->policyItemId) {
            $res['PolicyItemId'] = $this->policyItemId;
        }
        if (null !== $this->cidrIp) {
            $res['CidrIp'] = $this->cidrIp;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
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
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['PolicyItemId'])) {
            $model->policyItemId = $map['PolicyItemId'];
        }
        if (isset($map['CidrIp'])) {
            $model->cidrIp = $map['CidrIp'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        return $model;
    }
}
