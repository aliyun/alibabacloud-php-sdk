<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class CreateSavepointRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 58718c99-3b29-4c5e-93bb-c9fc4ec6****
     *
     * @var string
     */
    public $deploymentId;

    /**
     * @var string
     */
    public $description;

    /**
     * @example true
     *
     * @var bool
     */
    public $nativeFormat;
    protected $_name = [
        'deploymentId' => 'deploymentId',
        'description'  => 'description',
        'nativeFormat' => 'nativeFormat',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deploymentId) {
            $res['deploymentId'] = $this->deploymentId;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->nativeFormat) {
            $res['nativeFormat'] = $this->nativeFormat;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSavepointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deploymentId'])) {
            $model->deploymentId = $map['deploymentId'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['nativeFormat'])) {
            $model->nativeFormat = $map['nativeFormat'];
        }

        return $model;
    }
}
