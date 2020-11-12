<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class DeletePolicyVersionRequest extends Model
{
    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'policyName' => 'PolicyName',
        'versionId'  => 'VersionId',
    ];

    public function validate()
    {
        Model::validateRequired('policyName', $this->policyName, true);
        Model::validateRequired('versionId', $this->versionId, true);
    }

    public function toMap()
    {
        $res = [];
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
     * @return DeletePolicyVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
