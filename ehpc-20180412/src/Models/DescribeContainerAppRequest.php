<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class DescribeContainerAppRequest extends Model
{
    /**
     * @description The ID of the containerized application.
     *
     * You can call the [ListContainerApps](~~87333~~) operation to query the ID of the containerized application.
     * @example ehpc-container-ABDUGSkjs****
     *
     * @var string
     */
    public $containerId;
    protected $_name = [
        'containerId' => 'ContainerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContainerAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }

        return $model;
    }
}
