<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetAuditConfigResponseBody;

use AlibabaCloud\Tea\Model;

class audit extends Model
{
    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $legalSwitch;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'channel'     => 'Channel',
        'createTime'  => 'CreateTime',
        'legalSwitch' => 'LegalSwitch',
        'updateTime'  => 'UpdateTime',
        'userId'      => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->legalSwitch) {
            $res['LegalSwitch'] = $this->legalSwitch;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LegalSwitch'])) {
            $model->legalSwitch = $map['LegalSwitch'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
