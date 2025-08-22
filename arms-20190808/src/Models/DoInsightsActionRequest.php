<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class DoInsightsActionRequest extends Model
{
    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $module;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'data' => 'Data',
        'module' => 'Module',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        if (null !== $this->module) {
            $res['Module'] = $this->module;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        if (isset($map['Module'])) {
            $model->module = $map['Module'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
