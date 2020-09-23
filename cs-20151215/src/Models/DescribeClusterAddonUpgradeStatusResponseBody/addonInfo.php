<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonUpgradeStatusResponseBody;

use AlibabaCloud\Tea\Model;

class addonInfo extends Model
{
    /**
     * @description Addon类别。
     *
     * @var string
     */
    public $category;

    /**
     * @description 组件名称。
     *
     * @var string
     */
    public $componentName;

    /**
     * @description 升级说明信息。
     *
     * @var string
     */
    public $message;

    /**
     * @description 组件版本。
     *
     * @var string
     */
    public $version;

    /**
     * @description 组件配置文件。
     *
     * @var string
     */
    public $yaml;
    protected $_name = [
        'category'      => 'category',
        'componentName' => 'component_name',
        'message'       => 'message',
        'version'       => 'version',
        'yaml'          => 'yaml',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->componentName) {
            $res['component_name'] = $this->componentName;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }
        if (null !== $this->yaml) {
            $res['yaml'] = $this->yaml;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addonInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['component_name'])) {
            $model->componentName = $map['component_name'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }
        if (isset($map['yaml'])) {
            $model->yaml = $map['yaml'];
        }

        return $model;
    }
}
