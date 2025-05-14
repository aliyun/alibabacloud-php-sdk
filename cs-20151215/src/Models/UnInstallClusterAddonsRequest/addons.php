<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\UnInstallClusterAddonsRequest;

use AlibabaCloud\Dara\Model;

class addons extends Model
{
    /**
     * @var bool
     */
    public $cleanupCloudResources;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'cleanupCloudResources' => 'cleanup_cloud_resources',
        'name' => 'name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
