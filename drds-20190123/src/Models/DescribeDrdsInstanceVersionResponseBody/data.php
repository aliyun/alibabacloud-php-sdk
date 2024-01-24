<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceVersionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The current version of the instance.
     *
     * @example 5.3.12-15682777
     *
     * @var string
     */
    public $instanceVersion;

    /**
     * @description The latest version of the instance.
     *
     * @example 5.4.12-16315258
     *
     * @var string
     */
    public $newestVersion;
    protected $_name = [
        'instanceVersion' => 'InstanceVersion',
        'newestVersion'   => 'NewestVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceVersion) {
            $res['InstanceVersion'] = $this->instanceVersion;
        }
        if (null !== $this->newestVersion) {
            $res['NewestVersion'] = $this->newestVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceVersion'])) {
            $model->instanceVersion = $map['InstanceVersion'];
        }
        if (isset($map['NewestVersion'])) {
            $model->newestVersion = $map['NewestVersion'];
        }

        return $model;
    }
}
