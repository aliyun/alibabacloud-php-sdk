<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeComfyProductionsResponseBody;

use AlibabaCloud\Dara\Model;

class productions extends Model
{
    /**
     * @var string
     */
    public $comfyTaskId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $productionId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $updatedTime;
    protected $_name = [
        'comfyTaskId' => 'ComfyTaskId',
        'creationTime' => 'CreationTime',
        'fileName' => 'FileName',
        'productionId' => 'ProductionId',
        'state' => 'State',
        'updatedTime' => 'UpdatedTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comfyTaskId) {
            $res['ComfyTaskId'] = $this->comfyTaskId;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->productionId) {
            $res['ProductionId'] = $this->productionId;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
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
        if (isset($map['ComfyTaskId'])) {
            $model->comfyTaskId = $map['ComfyTaskId'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['ProductionId'])) {
            $model->productionId = $map['ProductionId'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
