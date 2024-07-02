<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateOrganizationMemberResponseBody;

use AlibabaCloud\Tea\Model;

class member extends Model
{
    /**
     * @example 292035769476261xxx
     *
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $organizationMemberName;
    protected $_name = [
        'accountId'              => 'accountId',
        'organizationMemberName' => 'organizationMemberName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }
        if (null !== $this->organizationMemberName) {
            $res['organizationMemberName'] = $this->organizationMemberName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return member
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }
        if (isset($map['organizationMemberName'])) {
            $model->organizationMemberName = $map['organizationMemberName'];
        }

        return $model;
    }
}
