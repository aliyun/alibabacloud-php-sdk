<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryCorpDetailInfoResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example btrip5txxxxxxx
     *
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $corpName;

    /**
     * @example open12********012jq
     *
     * @var string
     */
    public $openAgentId;

    /**
     * @var string
     */
    public $superAdminName;

    /**
     * @example 138xxxx0001
     *
     * @var string
     */
    public $superAdminPhone;

    /**
     * @example user1234
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'corpId'          => 'corp_id',
        'corpName'        => 'corp_name',
        'openAgentId'     => 'open_agent_id',
        'superAdminName'  => 'super_admin_name',
        'superAdminPhone' => 'super_admin_phone',
        'userId'          => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return module
     */
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
