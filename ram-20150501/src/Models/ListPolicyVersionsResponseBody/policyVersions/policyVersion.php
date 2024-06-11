<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListPolicyVersionsResponseBody\policyVersions;

use AlibabaCloud\Tea\Model;

class policyVersion extends Model
{
    /**
     * @description The time when the version was created.
     *
     * @example 2015-02-26T01:25:52Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description Indicates whether the version is the default version.
     *
     * @example false
     *
     * @var bool
     */
    public $isDefaultVersion;

    /**
     * @description The script of the policy.
     *
     * @example { "Statement": [{ "Action": ["oss:*"], "Effect": "Allow", "Resource": ["acs:oss:*:*:*"]}], "Version": "1"}
     *
     * @var string
     */
    public $policyDocument;

    /**
     * @description The ID of the version.
     *
     * @example v3
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'createDate'       => 'CreateDate',
        'isDefaultVersion' => 'IsDefaultVersion',
        'policyDocument'   => 'PolicyDocument',
        'versionId'        => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->isDefaultVersion) {
            $res['IsDefaultVersion'] = $this->isDefaultVersion;
        }
        if (null !== $this->policyDocument) {
            $res['PolicyDocument'] = $this->policyDocument;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
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
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['IsDefaultVersion'])) {
            $model->isDefaultVersion = $map['IsDefaultVersion'];
        }
        if (isset($map['PolicyDocument'])) {
            $model->policyDocument = $map['PolicyDocument'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
