<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class GetRepoSourceCodeRepoResponseBody extends Model
{
    /**
     * @description Indicates whether image building is automatically triggered when source code is committed. Valid values:
     *
     *   `true`: Image building is automatically triggered when source code is committed.
     *   `false`: Image building is not triggered when source code is committed.
     *
     * @example true
     *
     * @var string
     */
    public $autoBuild;

    /**
     * @description The response code.
     *
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @description The address of the source code repository.
     *
     * @example https://github.com
     *
     * @var string
     */
    public $codeRepoDomain;

    /**
     * @description The name of the source code repository.
     *
     * @example repo
     *
     * @var string
     */
    public $codeRepoName;

    /**
     * @description The namespace to which the source code repository belongs.
     *
     * @example namespace
     *
     * @var string
     */
    public $codeRepoNamespaceName;

    /**
     * @description The type of the code hosting platform. Valid values: `GITHUB`, `GITLAB`, `GITEE`, `CODE`, and `CODEUP`.
     *
     * @example GITHUB
     *
     * @var string
     */
    public $codeRepoType;

    /**
     * @description Indicates whether build cache is disabled. Valid values:
     *
     *   `true`: Build cache is disabled.
     *   `false`: Build cache is enabled.
     *
     * @example false
     *
     * @var string
     */
    public $disableCacheBuild;

    /**
     * @description Indicates whether the API call is successful. Valid values:
     *
     *   `true`: successful
     *   `false`: failed
     *
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @description Indicates whether image building is accelerated for servers outside the Chinese mainland. Valid values:
     *
     *   `true`: Image building is accelerated for servers outside the Chinese mainland.
     *   `false`: Image building is not accelerated for servers outside the Chinese mainland.
     *
     * @example false
     *
     * @var string
     */
    public $overseaBuild;

    /**
     * @description The ID of the repository.
     *
     * @example crr-gzsrlevmvoaq****
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The ID of the request.
     *
     * @example 4CE1F661-75DD-4EBD-A4AD-057B26834ABB
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'autoBuild'             => 'AutoBuild',
        'code'                  => 'Code',
        'codeRepoDomain'        => 'CodeRepoDomain',
        'codeRepoName'          => 'CodeRepoName',
        'codeRepoNamespaceName' => 'CodeRepoNamespaceName',
        'codeRepoType'          => 'CodeRepoType',
        'disableCacheBuild'     => 'DisableCacheBuild',
        'isSuccess'             => 'IsSuccess',
        'overseaBuild'          => 'OverseaBuild',
        'repoId'                => 'RepoId',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoBuild) {
            $res['AutoBuild'] = $this->autoBuild;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->codeRepoDomain) {
            $res['CodeRepoDomain'] = $this->codeRepoDomain;
        }
        if (null !== $this->codeRepoName) {
            $res['CodeRepoName'] = $this->codeRepoName;
        }
        if (null !== $this->codeRepoNamespaceName) {
            $res['CodeRepoNamespaceName'] = $this->codeRepoNamespaceName;
        }
        if (null !== $this->codeRepoType) {
            $res['CodeRepoType'] = $this->codeRepoType;
        }
        if (null !== $this->disableCacheBuild) {
            $res['DisableCacheBuild'] = $this->disableCacheBuild;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->overseaBuild) {
            $res['OverseaBuild'] = $this->overseaBuild;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRepoSourceCodeRepoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoBuild'])) {
            $model->autoBuild = $map['AutoBuild'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CodeRepoDomain'])) {
            $model->codeRepoDomain = $map['CodeRepoDomain'];
        }
        if (isset($map['CodeRepoName'])) {
            $model->codeRepoName = $map['CodeRepoName'];
        }
        if (isset($map['CodeRepoNamespaceName'])) {
            $model->codeRepoNamespaceName = $map['CodeRepoNamespaceName'];
        }
        if (isset($map['CodeRepoType'])) {
            $model->codeRepoType = $map['CodeRepoType'];
        }
        if (isset($map['DisableCacheBuild'])) {
            $model->disableCacheBuild = $map['DisableCacheBuild'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['OverseaBuild'])) {
            $model->overseaBuild = $map['OverseaBuild'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
