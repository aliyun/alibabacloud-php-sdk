<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class ModifyRenderingInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $renderingInstanceId;

    /**
     * @var string
     */
    public $renderingSpec;

    /**
     * @var string
     */
    public $storageSize;
    protected $_name = [
        'renderingInstanceId' => 'RenderingInstanceId',
        'renderingSpec' => 'RenderingSpec',
        'storageSize' => 'StorageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->renderingInstanceId) {
            $res['RenderingInstanceId'] = $this->renderingInstanceId;
        }

        if (null !== $this->renderingSpec) {
            $res['RenderingSpec'] = $this->renderingSpec;
        }

        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
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
        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }

        if (isset($map['RenderingSpec'])) {
            $model->renderingSpec = $map['RenderingSpec'];
        }

        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }

        return $model;
    }
}
