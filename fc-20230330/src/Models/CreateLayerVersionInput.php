<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

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
        if (null !== $this->code) {
            $this->code->validate();
        }
        if (\is_array($this->compatibleRuntime)) {
            Model::validateArray($this->compatibleRuntime);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = null !== $this->code ? $this->code->toArray($noStream) : $this->code;
        }

        if (null !== $this->compatibleRuntime) {
            if (\is_array($this->compatibleRuntime)) {
                $res['compatibleRuntime'] = [];
                $n1                       = 0;
                foreach ($this->compatibleRuntime as $item1) {
                    $res['compatibleRuntime'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->license) {
            $res['license'] = $this->license;
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
        if (isset($map['code'])) {
            $model->code = InputCodeLocation::fromMap($map['code']);
        }

        if (isset($map['compatibleRuntime'])) {
            if (!empty($map['compatibleRuntime'])) {
                $model->compatibleRuntime = [];
                $n1                       = 0;
                foreach ($map['compatibleRuntime'] as $item1) {
                    $model->compatibleRuntime[$n1++] = $item1;
                }
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
