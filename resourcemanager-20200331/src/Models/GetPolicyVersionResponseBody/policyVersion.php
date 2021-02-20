<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetPolicyVersionResponseBody;

use AlibabaCloud\Tea\Model;

class policyVersion extends Model
{
    /**
     * @var bool
     */
    public $isDefaultVersion;

    /**
     * @var string
     */
    public $policyDocument;

    /**
     * @var string
     */
    public $versionId;

    /**
     * @var string
     */
    public $createDate;
    protected $_name = [
        'isDefaultVersion' => 'IsDefaultVersion',
        'policyDocument'   => 'PolicyDocument',
        'versionId'        => 'VersionId',
        'createDate'       => 'CreateDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isDefaultVersion) {
            $res['IsDefaultVersion'] = $this->isDefaultVersion;
        }
        if (null !== $this->policyDocument) {
            $res['PolicyDocument'] = $this->policyDocument;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
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
        if (isset($map['IsDefaultVersion'])) {
            $model->isDefaultVersion = $map['IsDefaultVersion'];
        }
        if (isset($map['PolicyDocument'])) {
            $model->policyDocument = $map['PolicyDocument'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        return $model;
    }
}
