<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallPolicyBackUpAssociationListResponseBody\policyAssociationBackupConfigs;
use AlibabaCloud\Tea\Model;

class DescribeTrFirewallPolicyBackUpAssociationListResponseBody extends Model
{
    /**
     * @description The route tables.
     *
     * @var policyAssociationBackupConfigs[]
     */
    public $policyAssociationBackupConfigs;

    /**
     * @description The request ID.
     *
     * @example C264A756-9B48-57E3-B312-716941E146C6
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'policyAssociationBackupConfigs' => 'PolicyAssociationBackupConfigs',
        'requestId'                      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyAssociationBackupConfigs) {
            $res['PolicyAssociationBackupConfigs'] = [];
            if (null !== $this->policyAssociationBackupConfigs && \is_array($this->policyAssociationBackupConfigs)) {
                $n = 0;
                foreach ($this->policyAssociationBackupConfigs as $item) {
                    $res['PolicyAssociationBackupConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTrFirewallPolicyBackUpAssociationListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyAssociationBackupConfigs'])) {
            if (!empty($map['PolicyAssociationBackupConfigs'])) {
                $model->policyAssociationBackupConfigs = [];
                $n                                     = 0;
                foreach ($map['PolicyAssociationBackupConfigs'] as $item) {
                    $model->policyAssociationBackupConfigs[$n++] = null !== $item ? policyAssociationBackupConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
