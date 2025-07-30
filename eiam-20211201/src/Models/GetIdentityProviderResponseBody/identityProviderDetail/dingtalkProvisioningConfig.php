<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail;

use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\dingtalkProvisioningConfig\authedDepartmentIds;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\dingtalkProvisioningConfig\authedUsers;
use AlibabaCloud\Tea\Model;

class dingtalkProvisioningConfig extends Model
{
    /**
     * @description List of authorized DingTalk departments.
     *
     * @var authedDepartmentIds[]
     */
    public $authedDepartmentIds;

    /**
     * @description Authorized DingTalk account list.
     *
     * @var authedUsers[]
     */
    public $authedUsers;

    /**
     * @description DingTalk enterprise corpId.
     *
     * @example ding_xxxxx
     *
     * @var string
     */
    public $corpId;

    /**
     * @description The name of the company.
     *
     * @example test_xxx
     *
     * @var string
     */
    public $corpName;
    protected $_name = [
        'authedDepartmentIds' => 'AuthedDepartmentIds',
        'authedUsers' => 'AuthedUsers',
        'corpId' => 'CorpId',
        'corpName' => 'CorpName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authedDepartmentIds) {
            $res['AuthedDepartmentIds'] = [];
            if (null !== $this->authedDepartmentIds && \is_array($this->authedDepartmentIds)) {
                $n = 0;
                foreach ($this->authedDepartmentIds as $item) {
                    $res['AuthedDepartmentIds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->authedUsers) {
            $res['AuthedUsers'] = [];
            if (null !== $this->authedUsers && \is_array($this->authedUsers)) {
                $n = 0;
                foreach ($this->authedUsers as $item) {
                    $res['AuthedUsers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->corpName) {
            $res['CorpName'] = $this->corpName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dingtalkProvisioningConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthedDepartmentIds'])) {
            if (!empty($map['AuthedDepartmentIds'])) {
                $model->authedDepartmentIds = [];
                $n = 0;
                foreach ($map['AuthedDepartmentIds'] as $item) {
                    $model->authedDepartmentIds[$n++] = null !== $item ? authedDepartmentIds::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AuthedUsers'])) {
            if (!empty($map['AuthedUsers'])) {
                $model->authedUsers = [];
                $n = 0;
                foreach ($map['AuthedUsers'] as $item) {
                    $model->authedUsers[$n++] = null !== $item ? authedUsers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['CorpName'])) {
            $model->corpName = $map['CorpName'];
        }

        return $model;
    }
}
