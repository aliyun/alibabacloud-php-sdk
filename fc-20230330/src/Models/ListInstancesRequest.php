<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class ListInstancesRequest extends Model
{
    /**
     * @example LATEST, prod, 1
     *
     * @var string
     */
    public $qualifier;

    /**
     * @var bool
     */
    public $withAllActive;
    protected $_name = [
        'qualifier'     => 'qualifier',
        'withAllActive' => 'withAllActive',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }
        if (null !== $this->withAllActive) {
            $res['withAllActive'] = $this->withAllActive;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }
        if (isset($map['withAllActive'])) {
            $model->withAllActive = $map['withAllActive'];
        }

        return $model;
    }
}
