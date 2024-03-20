<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class CancelDomainVerificationRequest extends Model
{
    /**
     * @description The action type. Valid values:
     *
     *   **DOMAINAUDIT**: review a domain name review.
     *   **AUDITCONTACT**: review a contact.
     *
     * @example AUDITCONTACT
     *
     * @var string
     */
    public $actionType;

    /**
     * @description Thee instance ID of the domain name. You can call the [QueryDomainList](~~67712~~) operation to query the instance ID.
     *
     * @example S2019270W570xxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The language of the error message to return if the request fails. Valid values:
     *
     *   **zh**: Chinese.
     *   **en**: English.
     *
     * Default value: **en**.
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The IP address of the client. Set the value to **127.0.0.1**.
     *
     * @example 127.0.0.1
     *
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'actionType'   => 'ActionType',
        'instanceId'   => 'InstanceId',
        'lang'         => 'Lang',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelDomainVerificationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
