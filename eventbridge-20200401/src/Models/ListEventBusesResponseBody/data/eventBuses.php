<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventBusesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventBusesResponseBody\data\eventBuses\tags;

class eventBuses extends Model
{
    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $eventBusARN;

    /**
     * @var string
     */
    public $eventBusName;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'createTimestamp' => 'CreateTimestamp',
        'description' => 'Description',
        'eventBusARN' => 'EventBusARN',
        'eventBusName' => 'EventBusName',
        'resourceGroupId' => 'ResourceGroupId',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->eventBusARN) {
            $res['EventBusARN'] = $this->eventBusARN;
        }

        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EventBusARN'])) {
            $model->eventBusARN = $map['EventBusARN'];
        }

        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
