<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class UpdateConfigMapRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $configMapId;

    /**
     * @description This parameter is required.
     *
     * @example {"env.shell": "/bin/sh"}
     *
     * @var string
     */
    public $data;

    /**
     * @example test-desc
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'configMapId' => 'ConfigMapId',
        'data'        => 'Data',
        'description' => 'Description',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configMapId) {
            $res['ConfigMapId'] = $this->configMapId;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateConfigMapRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigMapId'])) {
            $model->configMapId = $map['ConfigMapId'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
