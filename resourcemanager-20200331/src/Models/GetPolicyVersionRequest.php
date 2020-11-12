<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class GetPolicyVersionRequest extends Model
{
    /**
     * @var string
     */
    public $policyType;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'policyType' => 'PolicyType',
        'policyName' => 'PolicyName',
        'versionId'  => 'VersionId',
    ];

    public function validate()
    {
        Model::validateRequired('policyType', $this->policyType, true);
        Model::validateRequired('policyName', $this->policyName, true);
        Model::validateRequired('versionId', $this->versionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPolicyVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
