<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models;

use AlibabaCloud\SDK\Governance\V20210120\Models\EnrollAccountRequest\baselineItems;
use AlibabaCloud\Tea\Model;

class EnrollAccountRequest extends Model
{
    /**
     * @description 账号名称前缀
     *
     * @var string
     */
    public $accountNamePrefix;

    /**
     * @description 注册账号ID
     *
     * @var int
     */
    public $accountUid;

    /**
     * @description 基线项配置数组
     *
     * @var baselineItems[]
     */
    public $baselineItems;

    /**
     * @description 账号显示名称
     *
     * @var string
     */
    public $displayName;

    /**
     * @description 父资源夹ID
     *
     * @var string
     */
    public $folderId;

    /**
     * @description 结算账号ID
     *
     * @var int
     */
    public $payerAccountUid;

    /**
     * @description RegionId
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'accountNamePrefix' => 'AccountNamePrefix',
        'accountUid'        => 'AccountUid',
        'baselineItems'     => 'BaselineItems',
        'displayName'       => 'DisplayName',
        'folderId'          => 'FolderId',
        'payerAccountUid'   => 'PayerAccountUid',
        'regionId'          => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountNamePrefix) {
            $res['AccountNamePrefix'] = $this->accountNamePrefix;
        }
        if (null !== $this->accountUid) {
            $res['AccountUid'] = $this->accountUid;
        }
        if (null !== $this->baselineItems) {
            $res['BaselineItems'] = [];
            if (null !== $this->baselineItems && \is_array($this->baselineItems)) {
                $n = 0;
                foreach ($this->baselineItems as $item) {
                    $res['BaselineItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }
        if (null !== $this->payerAccountUid) {
            $res['PayerAccountUid'] = $this->payerAccountUid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnrollAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountNamePrefix'])) {
            $model->accountNamePrefix = $map['AccountNamePrefix'];
        }
        if (isset($map['AccountUid'])) {
            $model->accountUid = $map['AccountUid'];
        }
        if (isset($map['BaselineItems'])) {
            if (!empty($map['BaselineItems'])) {
                $model->baselineItems = [];
                $n                    = 0;
                foreach ($map['BaselineItems'] as $item) {
                    $model->baselineItems[$n++] = null !== $item ? baselineItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }
        if (isset($map['PayerAccountUid'])) {
            $model->payerAccountUid = $map['PayerAccountUid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
