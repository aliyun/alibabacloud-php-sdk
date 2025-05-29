<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class ResetRenderingInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $actionName;

    /**
     * @var string
     */
    public $dataPackageId;

    /**
     * @var string
     */
    public $renderingInstanceId;
    protected $_name = [
        'actionName' => 'ActionName',
        'dataPackageId' => 'DataPackageId',
        'renderingInstanceId' => 'RenderingInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionName) {
            $res['ActionName'] = $this->actionName;
        }

        if (null !== $this->dataPackageId) {
            $res['DataPackageId'] = $this->dataPackageId;
        }

        if (null !== $this->renderingInstanceId) {
            $res['RenderingInstanceId'] = $this->renderingInstanceId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionName'])) {
            $model->actionName = $map['ActionName'];
        }

        if (isset($map['DataPackageId'])) {
            $model->dataPackageId = $map['DataPackageId'];
        }

        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }

        return $model;
    }
}
