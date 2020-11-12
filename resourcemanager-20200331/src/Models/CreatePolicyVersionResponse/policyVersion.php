<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreatePolicyVersionResponse;

use AlibabaCloud\Tea\Model;

class policyVersion extends Model
{
    /**
     * @var string
     */
    public $versionId;

    /**
     * @var bool
     */
    public $isDefaultVersion;

    /**
     * @var string
     */
    public $createDate;
    protected $_name = [
        'versionId'        => 'VersionId',
        'isDefaultVersion' => 'IsDefaultVersion',
        'createDate'       => 'CreateDate',
    ];

    public function validate()
    {
        Model::validateRequired('versionId', $this->versionId, true);
        Model::validateRequired('isDefaultVersion', $this->isDefaultVersion, true);
        Model::validateRequired('createDate', $this->createDate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->isDefaultVersion) {
            $res['IsDefaultVersion'] = $this->isDefaultVersion;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policyVersion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['IsDefaultVersion'])) {
            $model->isDefaultVersion = $map['IsDefaultVersion'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        return $model;
    }
}
