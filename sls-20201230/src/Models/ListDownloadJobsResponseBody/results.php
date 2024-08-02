<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\ListDownloadJobsResponseBody;

use AlibabaCloud\SDK\Sls\V20201230\Models\ListDownloadJobsResponseBody\results\configuration;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListDownloadJobsResponseBody\results\executionDetails;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @description 下载配置
     *
     * @var configuration
     */
    public $configuration;

    /**
     * @example 1722411060
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 任务描述
     *
     * @example a download job
     *
     * @var string
     */
    public $description;

    /**
     * @description 任务显示名称
     *
     * @example download-123
     *
     * @var string
     */
    public $displayName;

    /**
     * @description 任务执行细节
     *
     * @var executionDetails
     */
    public $executionDetails;

    /**
     * @description 代表资源名称的资源属性字段
     *
     * @example download-123
     *
     * @var string
     */
    public $name;

    /**
     * @example running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'configuration'    => 'configuration',
        'createTime'       => 'createTime',
        'description'      => 'description',
        'displayName'      => 'displayName',
        'executionDetails' => 'executionDetails',
        'name'             => 'name',
        'status'           => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configuration) {
            $res['configuration'] = null !== $this->configuration ? $this->configuration->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->executionDetails) {
            $res['executionDetails'] = null !== $this->executionDetails ? $this->executionDetails->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['configuration'])) {
            $model->configuration = configuration::fromMap($map['configuration']);
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['executionDetails'])) {
            $model->executionDetails = executionDetails::fromMap($map['executionDetails']);
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
