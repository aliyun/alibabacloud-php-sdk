<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Location\V20150612\Models;

use AlibabaCloud\Tea\Model;

class ListEndpointsRequest extends Model
{
    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $serivceCode;
    protected $_name = [
        'namespace'   => 'Namespace',
        'id'          => 'Id',
        'serivceCode' => 'SerivceCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->serivceCode) {
            $res['SerivceCode'] = $this->serivceCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEndpointsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['SerivceCode'])) {
            $model->serivceCode = $map['SerivceCode'];
        }

        return $model;
    }
}
