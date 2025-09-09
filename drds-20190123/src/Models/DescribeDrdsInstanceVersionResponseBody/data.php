<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceVersionResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $instanceVersion;

    /**
     * @var string
     */
    public $newestVersion;
    protected $_name = [
        'instanceVersion' => 'InstanceVersion',
        'newestVersion' => 'NewestVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
