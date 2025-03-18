<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Tea\Model;

class GetUserIdByUserExternalIdRequest extends Model
{
    /**
     * @description The external ID of the account.
     *
     * This parameter is required.
     *
     * @example xxx001
     *
     * @var string
     */
    public $userExternalId;

    /**
     * @description The source ID of the account. If the account was created in IDaaS, its source ID is the ID of the IDaaS instance. If the account was imported, its source ID is the enterprise ID in the source. For example, if the account was imported from DingTalk, its source ID is the corpId value of the enterprise in DingTalk.
     *
     * This parameter is required.
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $userSourceId;

    /**
     * @description The source type of the account. Valid values:
     *
     *   build_in: The account was created in Identity as a Service (IDaaS).
     *   ding_talk: The account was imported from DingTalk.
     *   ad: The account was imported from Microsoft Active Directory (AD).
     *   ldap: The account was imported from a Lightweight Directory Access Protocol (LDAP) service.
     *
     * This parameter is required.
     *
     * @example build_in
     *
     * @var string
     */
    public $userSourceType;
    protected $_name = [
        'userExternalId' => 'userExternalId',
        'userSourceId' => 'userSourceId',
        'userSourceType' => 'userSourceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->userExternalId) {
            $res['userExternalId'] = $this->userExternalId;
        }
        if (null !== $this->userSourceId) {
            $res['userSourceId'] = $this->userSourceId;
        }
        if (null !== $this->userSourceType) {
            $res['userSourceType'] = $this->userSourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserIdByUserExternalIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['userExternalId'])) {
            $model->userExternalId = $map['userExternalId'];
        }
        if (isset($map['userSourceId'])) {
            $model->userSourceId = $map['userSourceId'];
        }
        if (isset($map['userSourceType'])) {
            $model->userSourceType = $map['userSourceType'];
        }

        return $model;
    }
}
