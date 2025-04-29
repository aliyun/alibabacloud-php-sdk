<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryCorpDetailInfoResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
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
    public $superAdminName;

    /**
     * @var string
     */
    public $superAdminPhone;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'corpId' => 'corp_id',
        'corpName' => 'corp_name',
        'openAgentId' => 'open_agent_id',
        'superAdminName' => 'super_admin_name',
        'superAdminPhone' => 'super_admin_phone',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }

        if (null !== $this->corpName) {
            $res['corp_name'] = $this->corpName;
        }

        if (null !== $this->openAgentId) {
            $res['open_agent_id'] = $this->openAgentId;
        }

        if (null !== $this->superAdminName) {
            $res['super_admin_name'] = $this->superAdminName;
        }

        if (null !== $this->superAdminPhone) {
            $res['super_admin_phone'] = $this->superAdminPhone;
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
        if (isset($map['corp_id'])) {
            $model->corpId = $map['corp_id'];
        }

        if (isset($map['corp_name'])) {
            $model->corpName = $map['corp_name'];
        }

        if (isset($map['open_agent_id'])) {
            $model->openAgentId = $map['open_agent_id'];
        }

        if (isset($map['super_admin_name'])) {
            $model->superAdminName = $map['super_admin_name'];
        }

        if (isset($map['super_admin_phone'])) {
            $model->superAdminPhone = $map['super_admin_phone'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
