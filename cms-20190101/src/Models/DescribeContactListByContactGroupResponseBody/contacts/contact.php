<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListByContactGroupResponseBody\contacts;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListByContactGroupResponseBody\contacts\contact\channels;
use AlibabaCloud\Tea\Model;

class contact extends Model
{
    /**
     * @description The email address of the alert contact.
     *
     * @var channels
     */
    public $channels;

    /**
     * @description The description of the alert contact.
     *
     * @example 1552314252000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The alert notification targets.
     *
     * @example ECS
     *
     * @var string
     */
    public $desc;

    /**
     * @description The time when the alert contact was created.
     *
     * @example Alice
     *
     * @var string
     */
    public $name;

    /**
     * @description The name of the alert contact.
     *
     * @example 1552314252000
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'channels'   => 'Channels',
        'createTime' => 'CreateTime',
        'desc'       => 'Desc',
        'name'       => 'Name',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channels) {
            $res['Channels'] = null !== $this->channels ? $this->channels->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return contact
     */
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
