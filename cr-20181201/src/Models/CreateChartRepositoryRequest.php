<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class CreateChartRepositoryRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example cri-xkx6vujuhay0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the repository.
     *
     * @example repo01
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The name of the namespace to which the repository belongs.
     *
     * @example namespace01
     *
     * @var string
     */
    public $repoNamespaceName;

    /**
     * @description The default repository type. Valid values:
     *
     *   `PUBLIC`: a public repository.
     *   `PRIVATE`: a private repository.
     *
     * You can specify the RepoType or Summary parameter. The RepoType parameter is optional.
     * @example PUBLIC
     *
     * @var string
     */
    public $repoType;

    /**
     * @description The summary of the repository.
     *
     * @example summary
     *
     * @var string
     */
    public $summary;
    protected $_name = [
        'instanceId'        => 'InstanceId',
        'repoName'          => 'RepoName',
        'repoNamespaceName' => 'RepoNamespaceName',
        'repoType'          => 'RepoType',
        'summary'           => 'Summary',
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
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->repoNamespaceName) {
            $res['RepoNamespaceName'] = $this->repoNamespaceName;
        }
        if (null !== $this->repoType) {
            $res['RepoType'] = $this->repoType;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateChartRepositoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['RepoNamespaceName'])) {
            $model->repoNamespaceName = $map['RepoNamespaceName'];
        }
        if (isset($map['RepoType'])) {
            $model->repoType = $map['RepoType'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        return $model;
    }
}
