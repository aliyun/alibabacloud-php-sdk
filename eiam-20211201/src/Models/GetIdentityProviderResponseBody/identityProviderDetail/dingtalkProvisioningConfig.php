<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\dingtalkProvisioningConfig\authedDepartmentIds;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\dingtalkProvisioningConfig\authedUsers;

class dingtalkProvisioningConfig extends Model
{
    /**
     * @var authedDepartmentIds[]
     */
    public $authedDepartmentIds;

    /**
     * @var authedUsers[]
     */
    public $authedUsers;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $corpName;
    protected $_name = [
        'authedDepartmentIds' => 'AuthedDepartmentIds',
        'authedUsers' => 'AuthedUsers',
        'corpId' => 'CorpId',
        'corpName' => 'CorpName',
    ];

    public function validate()
    {
        if (\is_array($this->authedDepartmentIds)) {
            Model::validateArray($this->authedDepartmentIds);
        }
        if (\is_array($this->authedUsers)) {
            Model::validateArray($this->authedUsers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authedDepartmentIds) {
            if (\is_array($this->authedDepartmentIds)) {
                $res['AuthedDepartmentIds'] = [];
                $n1 = 0;
                foreach ($this->authedDepartmentIds as $item1) {
                    $res['AuthedDepartmentIds'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->authedUsers) {
            if (\is_array($this->authedUsers)) {
                $res['AuthedUsers'] = [];
                $n1 = 0;
                foreach ($this->authedUsers as $item1) {
                    $res['AuthedUsers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthedDepartmentIds'])) {
            if (!empty($map['AuthedDepartmentIds'])) {
                $model->authedDepartmentIds = [];
                $n1 = 0;
                foreach ($map['AuthedDepartmentIds'] as $item1) {
                    $model->authedDepartmentIds[$n1] = authedDepartmentIds::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AuthedUsers'])) {
            if (!empty($map['AuthedUsers'])) {
                $model->authedUsers = [];
                $n1 = 0;
                foreach ($map['AuthedUsers'] as $item1) {
                    $model->authedUsers[$n1] = authedUsers::fromMap($item1);
                    ++$n1;
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
