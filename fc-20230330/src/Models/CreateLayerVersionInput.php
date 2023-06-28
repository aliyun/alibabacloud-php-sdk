<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class CreateLayerVersionInput extends Model
{
    /**
     * @var InputCodeLocation
     */
    public $code;

    /**
     * @var string[]
     */
    public $compatibleRuntime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $license;
    protected $_name = [
        'code'              => 'code',
        'compatibleRuntime' => 'compatibleRuntime',
        'description'       => 'description',
        'license'           => 'license',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = null !== $this->code ? $this->code->toMap() : null;
        }
        if (null !== $this->compatibleRuntime) {
            $res['compatibleRuntime'] = $this->compatibleRuntime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->license) {
            $res['license'] = $this->license;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLayerVersionInput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = InputCodeLocation::fromMap($map['code']);
        }
        if (isset($map['compatibleRuntime'])) {
            if (!empty($map['compatibleRuntime'])) {
                $model->compatibleRuntime = $map['compatibleRuntime'];
            }
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['license'])) {
            $model->license = $map['license'];
        }

        return $model;
    }
}
