<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class SendDryRunSystemEventRequest extends Model
{
    /**
     * @var string
     */
    public $product;

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
    public $eventContent;
    protected $_name = [
        'product'      => 'Product',
        'eventName'    => 'EventName',
        'groupId'      => 'GroupId',
        'eventContent' => 'EventContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->eventContent) {
            $res['EventContent'] = $this->eventContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendDryRunSystemEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['EventContent'])) {
            $model->eventContent = $map['EventContent'];
        }

        return $model;
    }
}
