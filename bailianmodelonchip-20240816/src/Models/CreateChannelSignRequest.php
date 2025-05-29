<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models;

use AlibabaCloud\Dara\Model;

class CreateChannelSignRequest extends Model
{
    /**
     * @var string
     */
    public $channelName;

    /**
     * @var string
     */
    public $contact;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'channelName' => 'channelName',
        'contact' => 'contact',
        'description' => 'description',
        'phone' => 'phone',
        'remark' => 'remark',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelName) {
            $res['channelName'] = $this->channelName;
        }

        if (null !== $this->contact) {
            $res['contact'] = $this->contact;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }

        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
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
        if (isset($map['channelName'])) {
            $model->channelName = $map['channelName'];
        }

        if (isset($map['contact'])) {
            $model->contact = $map['contact'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }

        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }

        return $model;
    }
}
