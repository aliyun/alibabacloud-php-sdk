<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Tea\Model;

class UpdateModuleMarketAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $moduleDetail;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'description'  => 'description',
        'moduleDetail' => 'moduleDetail',
        'name'         => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->moduleDetail) {
            $res['moduleDetail'] = $this->moduleDetail;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateModuleMarketAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['moduleDetail'])) {
            $model->moduleDetail = $map['moduleDetail'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
