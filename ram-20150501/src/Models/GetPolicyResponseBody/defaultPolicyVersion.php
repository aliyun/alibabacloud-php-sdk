<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\GetPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class defaultPolicyVersion extends Model
{
    /**
     * @description The time when the default policy version was created.
     *
     * @example 2015-01-23T12:33:18Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description An attribute in the `DefaultPolicyVersion` parameter. The value of the `IsDefaultVersion` parameter is `true`.
     *
     * @example true
     *
     * @var bool
     */
    public $isDefaultVersion;

    /**
     * @description The script of the default policy version.
     *
     * @example { "Statement": [{ "Action": ["oss:*"], "Effect": "Allow", "Resource": ["acs:oss:*:*:*"]}], "Version": "1"}
     *
     * @var string
     */
    public $policyDocument;

    /**
     * @description The ID of the default policy version.
     *
     * @example v1
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
     * @return defaultPolicyVersion
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
