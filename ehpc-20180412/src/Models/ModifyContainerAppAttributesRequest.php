<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class ModifyContainerAppAttributesRequest extends Model
{
    /**
     * @description The ID of the container.
     *
     * You can call the [ListContainerApps](~~87333~~) operation to query the ID of the containerized application.
     * @example ehpc-container-ABDUGSkjs****
     *
     * @var string
     */
    public $containerId;

    /**
     * @description The new description of the containerized application.
     *
     * @example ExampleDescription
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'containerId' => 'ContainerId',
        'description' => 'Description',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyContainerAppAttributesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
