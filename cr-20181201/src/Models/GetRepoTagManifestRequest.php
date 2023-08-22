<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class GetRepoTagManifestRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example cri-kmsiwlxxdcva****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the repository.
     *
     * @example crr-kwgb20p8wwmh****
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The schema version of the manifest. Valid values: 1 and 2.
     *
     * @example 2
     *
     * @var int
     */
    public $schemaVersion;

    /**
     * @description The tag of the image.
     *
     * @example master
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'repoId'        => 'RepoId',
        'schemaVersion' => 'SchemaVersion',
        'tag'           => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->schemaVersion) {
            $res['SchemaVersion'] = $this->schemaVersion;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRepoTagManifestRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['SchemaVersion'])) {
            $model->schemaVersion = $map['SchemaVersion'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
