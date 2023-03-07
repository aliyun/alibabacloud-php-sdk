<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteContainerAppsRequest;

use AlibabaCloud\Tea\Model;

class containerApp extends Model
{
    /**
     * @description The ID of the containerized application that you want to delete. Valid values of N: 1 to 100.
     *
     * You can call the [ListContainerApps](~~87333~~) operation to query the ID of the containerized application.
     * @example ehpc-container-ABDUGSkjs****
     *
     * @var string
     */
    public $id;
    protected $_name = [
        'id' => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerApp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
