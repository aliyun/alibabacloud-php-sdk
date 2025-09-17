<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MarketplaceIntl\V20221230\Models;

use AlibabaCloud\Dara\Model;

class NoticeInstanceUserRequest extends Model
{
    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var string
     */
    public $noticeParam;

    /**
     * @var int
     */
    public $noticeType;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'noticeParam' => 'NoticeParam',
        'noticeType' => 'NoticeType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->noticeParam) {
            $res['NoticeParam'] = $this->noticeParam;
        }

        if (null !== $this->noticeType) {
            $res['NoticeType'] = $this->noticeType;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NoticeParam'])) {
            $model->noticeParam = $map['NoticeParam'];
        }

        if (isset($map['NoticeType'])) {
            $model->noticeType = $map['NoticeType'];
        }

        return $model;
    }
}
