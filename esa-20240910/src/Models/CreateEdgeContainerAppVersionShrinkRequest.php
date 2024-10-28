<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateEdgeContainerAppVersionShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example app-88068867578379****
     *
     * @var string
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @example [
     * ]
     * @var string
     */
    public $containersShrink;

    /**
     * @description This parameter is required.
     *
     * @example verson1
     *
     * @var string
     */
    public $name;

    /**
     * @example test app
     *
     * @var string
     */
    public $remarks;
    protected $_name = [
        'appId'            => 'AppId',
        'containersShrink' => 'Containers',
        'name'             => 'Name',
        'remarks'          => 'Remarks',
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
        if (null !== $this->containersShrink) {
            $res['Containers'] = $this->containersShrink;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->remarks) {
            $res['Remarks'] = $this->remarks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEdgeContainerAppVersionShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Containers'])) {
            $model->containersShrink = $map['Containers'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Remarks'])) {
            $model->remarks = $map['Remarks'];
        }

        return $model;
    }
}
