<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ScaleOutClusterRequest;

use AlibabaCloud\Tea\Model;

class runtime extends Model
{
    /**
     * @description 容器引擎名称。
     *
     * @var string
     */
    public $name;

    /**
     * @description 容器引擎版本。
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'name'    => 'name',
        'version' => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return runtime
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
