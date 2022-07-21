<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class ResourceRequirements extends Model
{
    /**
     * @description 资源限制
     *
     * @var string[]
     */
    public $limits;

    /**
     * @description 资源需求
     *
     * @var string[]
     */
    public $requests;
    protected $_name = [
        'limits'   => 'Limits',
        'requests' => 'Requests',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limits) {
            $res['Limits'] = $this->limits;
        }
        if (null !== $this->requests) {
            $res['Requests'] = $this->requests;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResourceRequirements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Limits'])) {
            $model->limits = $map['Limits'];
        }
        if (isset($map['Requests'])) {
            $model->requests = $map['Requests'];
        }

        return $model;
    }
}
