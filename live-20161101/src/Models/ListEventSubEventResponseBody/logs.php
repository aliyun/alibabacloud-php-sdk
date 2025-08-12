<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListEventSubEventResponseBody;

use AlibabaCloud\Dara\Model;

class logs extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $code;

    /**
     * @var int
     */
    public $cost;

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $subId;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'appId' => 'AppId',
        'code' => 'Code',
        'cost' => 'Cost',
        'data' => 'Data',
        'messageId' => 'MessageId',
        'subId' => 'SubId',
        'time' => 'Time',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->cost) {
            $res['Cost'] = $this->cost;
        }

        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }

        if (null !== $this->subId) {
            $res['SubId'] = $this->subId;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Cost'])) {
            $model->cost = $map['Cost'];
        }

        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }

        if (isset($map['SubId'])) {
            $model->subId = $map['SubId'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
