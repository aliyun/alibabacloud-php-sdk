<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ChannelCorpCreateResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $administratorName;

    /**
     * @var string
     */
    public $administratorPhone;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $corpName;

    /**
     * @var string
     */
    public $openAgentId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'administratorName' => 'administrator_name',
        'administratorPhone' => 'administrator_phone',
        'corpId' => 'corp_id',
        'corpName' => 'corp_name',
        'openAgentId' => 'open_agent_id',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->administratorName) {
            $res['administrator_name'] = $this->administratorName;
        }

        if (null !== $this->administratorPhone) {
            $res['administrator_phone'] = $this->administratorPhone;
        }

        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }

        if (null !== $this->corpName) {
            $res['corp_name'] = $this->corpName;
        }

        if (null !== $this->openAgentId) {
            $res['open_agent_id'] = $this->openAgentId;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
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
        if (isset($map['administrator_name'])) {
            $model->administratorName = $map['administrator_name'];
        }

        if (isset($map['administrator_phone'])) {
            $model->administratorPhone = $map['administrator_phone'];
        }

        if (isset($map['corp_id'])) {
            $model->corpId = $map['corp_id'];
        }

        if (isset($map['corp_name'])) {
            $model->corpName = $map['corp_name'];
        }

        if (isset($map['open_agent_id'])) {
            $model->openAgentId = $map['open_agent_id'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
