<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterAddonsRequest;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description 组件名称。
     *
     * @var string
     */
    public $componentName;

    /**
     * @description 可升级版本。
     *
     * @var string
     */
    public $nextVersion;

    /**
     * @description 当前版本。
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'componentName' => 'component_name',
        'nextVersion'   => 'next_version',
        'version'       => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentName) {
            $res['component_name'] = $this->componentName;
        }
        if (null !== $this->nextVersion) {
            $res['next_version'] = $this->nextVersion;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['component_name'])) {
            $model->componentName = $map['component_name'];
        }
        if (isset($map['next_version'])) {
            $model->nextVersion = $map['next_version'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
