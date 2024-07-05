<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class ManageLoginRequest extends Model
{
    /**
     * @example open
     *
     * @var string
     */
    public $actionName;

    /**
     * @example mygroup
     *
     * @var string
     */
    public $keyGroup;

    /**
     * @example mykey
     *
     * @var string
     */
    public $keyName;

    /**
     * @description This parameter is required.
     *
     * @example render-9f8c57355d224ad7beaf95e145f22111
     *
     * @var string
     */
    public $renderingInstanceId;
    protected $_name = [
        'actionName'          => 'ActionName',
        'keyGroup'            => 'KeyGroup',
        'keyName'             => 'KeyName',
        'renderingInstanceId' => 'RenderingInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionName) {
            $res['ActionName'] = $this->actionName;
        }
        if (null !== $this->keyGroup) {
            $res['KeyGroup'] = $this->keyGroup;
        }
        if (null !== $this->keyName) {
            $res['KeyName'] = $this->keyName;
        }
        if (null !== $this->renderingInstanceId) {
            $res['RenderingInstanceId'] = $this->renderingInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ManageLoginRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionName'])) {
            $model->actionName = $map['ActionName'];
        }
        if (isset($map['KeyGroup'])) {
            $model->keyGroup = $map['KeyGroup'];
        }
        if (isset($map['KeyName'])) {
            $model->keyName = $map['KeyName'];
        }
        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }

        return $model;
    }
}
