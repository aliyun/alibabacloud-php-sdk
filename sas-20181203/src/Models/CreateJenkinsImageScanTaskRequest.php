<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateJenkinsImageScanTaskRequest extends Model
{
    /**
     * @description The digest of the image.
     *
     * @example a8c9f3765684cd8d9053db9523eab58878e99a199217500efd9ae2a860a7e01e
     *
     * @var string
     */
    public $digest;

    /**
     * @description The time when the image was created.
     *
     * @example 1717430400000
     *
     * @var int
     */
    public $imageCreate;

    /**
     * @description The ID of the image.
     *
     * @example b10ef7b245c34a0822055c74fc4a0e8b5baf0279306316b2c517a501ed250b1e
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The size of the image. Unit: bytes.
     *
     * @example 6120340
     *
     * @var int
     */
    public $imageSize;

    /**
     * @description The time when the image was updated.
     *
     * @example 1717430498600
     *
     * @var int
     */
    public $imageUpdate;

    /**
     * @description The information about the Jenkins environment.
     *
     * @example release
     *
     * @var string
     */
    public $jenkinsEnv;

    /**
     * @description The namespace.
     *
     * @example lkl-zf-ss-ccss
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The name of the image repository.
     *
     * @example sdk
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The source IP address of the request.
     *
     * @example 119.136.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The tag of the image.
     *
     * @example 00f597223f-20210831-1
     *
     * @var string
     */
    public $tag;

    /**
     * @description The token that is used to access the Jenkins image repository.
     *
     * @example c3de8326-273e-11fc-a0e3-d012435c****
     *
     * @var string
     */
    public $token;

    /**
     * @description The UUID of the image asset.
     *
     * @example 5b268326-273e-44fc-a0e3-9482435c****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'digest' => 'Digest',
        'imageCreate' => 'ImageCreate',
        'imageId' => 'ImageId',
        'imageSize' => 'ImageSize',
        'imageUpdate' => 'ImageUpdate',
        'jenkinsEnv' => 'JenkinsEnv',
        'namespace' => 'Namespace',
        'repoName' => 'RepoName',
        'sourceIp' => 'SourceIp',
        'tag' => 'Tag',
        'token' => 'Token',
        'uuid' => 'Uuid',
    ];

    public function validate() {}

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
