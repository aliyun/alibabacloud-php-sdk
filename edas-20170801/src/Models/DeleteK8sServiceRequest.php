<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DeleteK8sServiceRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 5a166fbd***a286-781659d9f54c
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the service.
     *
     * @example service-http
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'appId' => 'AppId',
        'name'  => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteK8sServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
