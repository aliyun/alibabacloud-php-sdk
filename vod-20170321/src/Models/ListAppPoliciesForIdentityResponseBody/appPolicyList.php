<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListAppPoliciesForIdentityResponseBody;

use AlibabaCloud\Tea\Model;

class appPolicyList extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $policyValue;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $modificationTime;

    /**
     * @var string
     */
    public $policyType;
    protected $_name = [
        'creationTime'     => 'CreationTime',
        'description'      => 'Description',
        'appId'            => 'AppId',
        'policyValue'      => 'PolicyValue',
        'policyName'       => 'PolicyName',
        'modificationTime' => 'ModificationTime',
        'policyType'       => 'PolicyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->policyValue) {
            $res['PolicyValue'] = $this->policyValue;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['PolicyValue'])) {
            $model->policyValue = $map['PolicyValue'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        return $model;
    }
}
