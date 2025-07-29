<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\UnInstallClusterAddonsRequest;

use AlibabaCloud\Tea\Model;

class addons extends Model
{
    /**
     * @description Specifies whether to clean up related cloud resources during uninstallation.
     *
     *   true: clean up
     *   false: retain
     *
     * @example true
     *
     * @var bool
     */
    public $cleanupCloudResources;

    /**
     * @description The name of the add-on to uninstall. You can call the [ListClusterAddonInstances](https://help.aliyun.com/document_detail/2667940.html) operation to query the installed add-ons.
     *
     * @example ack-node-problem-detector
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'cleanupCloudResources' => 'cleanup_cloud_resources',
        'name' => 'name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cleanupCloudResources) {
            $res['cleanup_cloud_resources'] = $this->cleanupCloudResources;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addons
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cleanup_cloud_resources'])) {
            $model->cleanupCloudResources = $map['cleanup_cloud_resources'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
