<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ListMethodsRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example be213a4a-c7e4-473b-ab0****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the service.
     *
     * @example Method
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'appId'       => 'AppId',
        'serviceName' => 'ServiceName',
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
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMethodsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
