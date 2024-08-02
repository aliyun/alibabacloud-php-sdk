<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\CreateDownloadJobRequest\configuration;
use AlibabaCloud\Tea\Model;

class CreateDownloadJobRequest extends Model
{
    /**
     * @description 下载配置
     *
     * This parameter is required.
     * @var configuration
     */
    public $configuration;

    /**
     * @description 任务描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 任务显示名称
     *
     * This parameter is required.
     * @example download-123456789
     *
     * @var string
     */
    public $displayName;

    /**
     * @description 代表资源名称的资源属性字段
     *
     * This parameter is required.
     * @example download-123
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'configuration' => 'configuration',
        'description'   => 'description',
        'displayName'   => 'displayName',
        'name'          => 'name',
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
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDownloadJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['configuration'])) {
            $model->configuration = configuration::fromMap($map['configuration']);
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
