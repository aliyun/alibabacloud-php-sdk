<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CheckUpgradeItemResponseBody;

use AlibabaCloud\Dara\Model;

class upgradeItem extends Model
{
    /**
     * @var string
     */
    public $checkResult;

    /**
     * @var string
     */
    public $checkStatus;

    /**
     * @var string
     */
    public $upgradeItemId;
    protected $_name = [
        'checkResult' => 'CheckResult',
        'checkStatus' => 'CheckStatus',
        'upgradeItemId' => 'UpgradeItemId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkResult) {
            $res['CheckResult'] = $this->checkResult;
        }

        if (null !== $this->checkStatus) {
            $res['CheckStatus'] = $this->checkStatus;
        }

        if (null !== $this->upgradeItemId) {
            $res['UpgradeItemId'] = $this->upgradeItemId;
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
        if (isset($map['CheckResult'])) {
            $model->checkResult = $map['CheckResult'];
        }

        if (isset($map['CheckStatus'])) {
            $model->checkStatus = $map['CheckStatus'];
        }

        if (isset($map['UpgradeItemId'])) {
            $model->upgradeItemId = $map['UpgradeItemId'];
        }

        return $model;
    }
}
