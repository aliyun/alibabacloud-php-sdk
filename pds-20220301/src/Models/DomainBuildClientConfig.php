<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class DomainBuildClientConfig extends Model
{
    /**
     * @var string
     */
    public $copyright;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'copyright' => 'copyright',
        'name'      => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->copyright) {
            $res['copyright'] = $this->copyright;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DomainBuildClientConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['copyright'])) {
            $model->copyright = $map['copyright'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
