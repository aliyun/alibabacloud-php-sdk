<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class UpdateTestResultRequest extends Model
{
    /**
     * @example 131xxx38624xxxx68
     *
     * @var string
     */
    public $executor;

    /**
     * @example TO DO
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'executor' => 'executor',
        'status'   => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executor) {
            $res['executor'] = $this->executor;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTestResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['executor'])) {
            $model->executor = $map['executor'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
