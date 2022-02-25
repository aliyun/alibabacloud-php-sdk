<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateJenkinsImageScanTaskRequest extends Model
{
    /**
     * @description 镜像 digest
     *
     * @var string
     */
    public $digest;

    /**
     * @description 创建时间，timestamp
     *
     * @var int
     */
    public $imageCreate;

    /**
     * @description imageId
     *
     * @var string
     */
    public $imageId;

    /**
     * @description 镜像大小，字节
     *
     * @var int
     */
    public $imageSize;

    /**
     * @description 修改时间，timestamp
     *
     * @var int
     */
    public $imageUpdate;

    /**
     * @var string
     */
    public $jenkinsEnv;

    /**
     * @description 镜像命名空间，可选
     *
     * @var string
     */
    public $namespace;

    /**
     * @description repo名称
     *
     * @var string
     */
    public $repoName;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @description 镜像标签
     *
     * @var string
     */
    public $tag;

    /**
     * @description jenkins 镜像仓库 token，必填
     *
     * @var string
     */
    public $token;

    /**
     * @description 资产 uuid
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'digest'      => 'Digest',
        'imageCreate' => 'ImageCreate',
        'imageId'     => 'ImageId',
        'imageSize'   => 'ImageSize',
        'imageUpdate' => 'ImageUpdate',
        'jenkinsEnv'  => 'JenkinsEnv',
        'namespace'   => 'Namespace',
        'repoName'    => 'RepoName',
        'sourceIp'    => 'SourceIp',
        'tag'         => 'Tag',
        'token'       => 'Token',
        'uuid'        => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
        }
        if (null !== $this->imageCreate) {
            $res['ImageCreate'] = $this->imageCreate;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageSize) {
            $res['ImageSize'] = $this->imageSize;
        }
        if (null !== $this->imageUpdate) {
            $res['ImageUpdate'] = $this->imageUpdate;
        }
        if (null !== $this->jenkinsEnv) {
            $res['JenkinsEnv'] = $this->jenkinsEnv;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateJenkinsImageScanTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }
        if (isset($map['ImageCreate'])) {
            $model->imageCreate = $map['ImageCreate'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageSize'])) {
            $model->imageSize = $map['ImageSize'];
        }
        if (isset($map['ImageUpdate'])) {
            $model->imageUpdate = $map['ImageUpdate'];
        }
        if (isset($map['JenkinsEnv'])) {
            $model->jenkinsEnv = $map['JenkinsEnv'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
