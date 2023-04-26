<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListAppPoliciesForIdentityResponseBody;

use AlibabaCloud\Tea\Model;

class appPolicyList extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example app-****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The last time when the application policy was modified. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-01-01T01:01:01Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The content of the policy.
     *
     * @example App full access permission
     *
     * @var string
     */
    public $description;

    /**
     * @example 2019-01-01T01:08:01Z
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @description Queries the application policies that are attached to the specified identity. The identity may be a RAM user or RAM role.
     *
     * @example VODAppFullAccess
     *
     * @var string
     */
    public $policyName;

    /**
     * @example System
     *
     * @var string
     */
    public $policyType;

    /**
     * @description The details of each policy.
     *
     **
     *
     **Note** A maximum of 100 entries can be returned.
     *
     * @example ****
     *
     * @var string
     */
    public $policyValue;
    protected $_name = [
        'appId'            => 'AppId',
        'creationTime'     => 'CreationTime',
        'description'      => 'Description',
        'modificationTime' => 'ModificationTime',
        'policyName'       => 'PolicyName',
        'policyType'       => 'PolicyType',
        'policyValue'      => 'PolicyValue',
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
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }
        if (null !== $this->policyValue) {
            $res['PolicyValue'] = $this->policyValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appPolicyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }
        if (isset($map['PolicyValue'])) {
            $model->policyValue = $map['PolicyValue'];
        }

        return $model;
    }
}
