<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;

class SendDryRunSystemEventRequest extends Model
{
    /**
     * @var string
     */
    public $eventContent;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'eventContent' => 'EventContent',
        'eventName' => 'EventName',
        'groupId' => 'GroupId',
        'product' => 'Product',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventContent) {
            $res['EventContent'] = $this->eventContent;
        }

        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['EventContent'])) {
            $model->eventContent = $map['EventContent'];
        }

        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
