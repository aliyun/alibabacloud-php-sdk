<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallPolicyBackUpAssociationListResponseBody\policyAssociationBackupConfigs;

class DescribeTrFirewallPolicyBackUpAssociationListResponseBody extends Model
{
    /**
     * @var policyAssociationBackupConfigs[]
     */
    public $policyAssociationBackupConfigs;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'policyAssociationBackupConfigs' => 'PolicyAssociationBackupConfigs',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->policyAssociationBackupConfigs)) {
            Model::validateArray($this->policyAssociationBackupConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policyAssociationBackupConfigs) {
            if (\is_array($this->policyAssociationBackupConfigs)) {
                $res['PolicyAssociationBackupConfigs'] = [];
                $n1 = 0;
                foreach ($this->policyAssociationBackupConfigs as $item1) {
                    $res['PolicyAssociationBackupConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['PolicyAssociationBackupConfigs'])) {
            if (!empty($map['PolicyAssociationBackupConfigs'])) {
                $model->policyAssociationBackupConfigs = [];
                $n1 = 0;
                foreach ($map['PolicyAssociationBackupConfigs'] as $item1) {
                    $model->policyAssociationBackupConfigs[$n1] = policyAssociationBackupConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
