<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceVersionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $newestVersion;

    /**
     * @var string
     */
    public $instanceVersion;
    protected $_name = [
        'newestVersion'   => 'NewestVersion',
        'instanceVersion' => 'InstanceVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newestVersion) {
            $res['NewestVersion'] = $this->newestVersion;
        }
        if (null !== $this->instanceVersion) {
            $res['InstanceVersion'] = $this->instanceVersion;
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
        if (isset($map['NewestVersion'])) {
            $model->newestVersion = $map['NewestVersion'];
        }
        if (isset($map['InstanceVersion'])) {
            $model->instanceVersion = $map['InstanceVersion'];
        }

        return $model;
    }
}
