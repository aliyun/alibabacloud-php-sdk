<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListByContactGroupResponseBody\contacts;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListByContactGroupResponseBody\contacts\contact\channels;

class contact extends Model
{
    /**
     * @var channels
     */
    public $channels;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'channels' => 'Channels',
        'createTime' => 'CreateTime',
        'desc' => 'Desc',
        'name' => 'Name',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->channels) {
            $this->channels->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channels) {
            $res['Channels'] = null !== $this->channels ? $this->channels->toArray($noStream) : $this->channels;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['Channels'])) {
            $model->channels = channels::fromMap($map['Channels']);
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
