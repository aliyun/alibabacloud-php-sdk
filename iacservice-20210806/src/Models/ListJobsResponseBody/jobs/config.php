<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListJobsResponseBody\jobs;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @var string
     */
    public $moduleVersion;

    /**
     * @var string
     */
    public $resourcesChanged;
    protected $_name = [
        'moduleVersion'    => 'moduleVersion',
        'resourcesChanged' => 'resourcesChanged',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleVersion) {
            $res['moduleVersion'] = $this->moduleVersion;
        }
        if (null !== $this->resourcesChanged) {
            $res['resourcesChanged'] = $this->resourcesChanged;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['moduleVersion'])) {
            $model->moduleVersion = $map['moduleVersion'];
        }
        if (isset($map['resourcesChanged'])) {
            $model->resourcesChanged = $map['resourcesChanged'];
        }

        return $model;
    }
}
