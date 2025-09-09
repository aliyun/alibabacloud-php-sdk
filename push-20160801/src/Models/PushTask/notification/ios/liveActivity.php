<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\PushTask\notification\ios;

use AlibabaCloud\Dara\Model;

class liveActivity extends Model
{
    /**
     * @var string
     */
    public $attributes;

    /**
     * @var string
     */
    public $attributesType;

    /**
     * @var string
     */
    public $contentState;

    /**
     * @var int
     */
    public $dismissalDate;

    /**
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $staleDate;
    protected $_name = [
        'attributes' => 'Attributes',
        'attributesType' => 'AttributesType',
        'contentState' => 'ContentState',
        'dismissalDate' => 'DismissalDate',
        'event' => 'Event',
        'id' => 'Id',
        'staleDate' => 'StaleDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }

        if (null !== $this->attributesType) {
            $res['AttributesType'] = $this->attributesType;
        }

        if (null !== $this->contentState) {
            $res['ContentState'] = $this->contentState;
        }

        if (null !== $this->dismissalDate) {
            $res['DismissalDate'] = $this->dismissalDate;
        }

        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->staleDate) {
            $res['StaleDate'] = $this->staleDate;
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
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }

        if (isset($map['AttributesType'])) {
            $model->attributesType = $map['AttributesType'];
        }

        if (isset($map['ContentState'])) {
            $model->contentState = $map['ContentState'];
        }

        if (isset($map['DismissalDate'])) {
            $model->dismissalDate = $map['DismissalDate'];
        }

        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['StaleDate'])) {
            $model->staleDate = $map['StaleDate'];
        }

        return $model;
    }
}
