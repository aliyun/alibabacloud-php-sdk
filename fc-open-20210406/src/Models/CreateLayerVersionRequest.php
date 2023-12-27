<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class CreateLayerVersionRequest extends Model
{
    /**
     * @description The layer code.
     *
     * @var Code
     */
    public $code;

    /**
     * @description The runtimes that are supported by the layer.
     *
     * @var string[]
     */
    public $compatibleRuntime;

    /**
     * @description The layer description. The description can be up to 256 characters in length.
     *
     * @example test
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'code'              => 'Code',
        'compatibleRuntime' => 'compatibleRuntime',
        'description'       => 'description',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = null !== $this->code ? $this->code->toMap() : null;
        }
        if (null !== $this->compatibleRuntime) {
            $res['compatibleRuntime'] = $this->compatibleRuntime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLayerVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = Code::fromMap($map['Code']);
        }
        if (isset($map['compatibleRuntime'])) {
            if (!empty($map['compatibleRuntime'])) {
                $model->compatibleRuntime = $map['compatibleRuntime'];
            }
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        return $model;
    }
}
