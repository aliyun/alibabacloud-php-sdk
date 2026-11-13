<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetConsumerAccessOverviewResponseBody\data\resources\modelGroups;

use AlibabaCloud\Dara\Model;

class models extends Model
{
    /**
     * @var string
     */
    public $consumerGroupName;

    /**
     * @var string
     */
    public $modelCardId;

    /**
     * @var string
     */
    public $modelSourceId;

    /**
     * @var string
     */
    public $modelSourceName;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'consumerGroupName' => 'consumerGroupName',
        'modelCardId' => 'modelCardId',
        'modelSourceId' => 'modelSourceId',
        'modelSourceName' => 'modelSourceName',
        'modelType' => 'modelType',
        'name' => 'name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumerGroupName) {
            $res['consumerGroupName'] = $this->consumerGroupName;
        }

        if (null !== $this->modelCardId) {
            $res['modelCardId'] = $this->modelCardId;
        }

        if (null !== $this->modelSourceId) {
            $res['modelSourceId'] = $this->modelSourceId;
        }

        if (null !== $this->modelSourceName) {
            $res['modelSourceName'] = $this->modelSourceName;
        }

        if (null !== $this->modelType) {
            $res['modelType'] = $this->modelType;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['consumerGroupName'])) {
            $model->consumerGroupName = $map['consumerGroupName'];
        }

        if (isset($map['modelCardId'])) {
            $model->modelCardId = $map['modelCardId'];
        }

        if (isset($map['modelSourceId'])) {
            $model->modelSourceId = $map['modelSourceId'];
        }

        if (isset($map['modelSourceName'])) {
            $model->modelSourceName = $map['modelSourceName'];
        }

        if (isset($map['modelType'])) {
            $model->modelType = $map['modelType'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
