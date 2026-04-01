<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpgradeInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpgradeInfoResponseBody\result\upgradeInfo;

class result extends Model
{
    /**
     * @var upgradeInfo
     */
    public $upgradeInfo;
    protected $_name = [
        'upgradeInfo' => 'UpgradeInfo',
    ];

    public function validate()
    {
        if (null !== $this->upgradeInfo) {
            $this->upgradeInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->upgradeInfo) {
            $res['UpgradeInfo'] = null !== $this->upgradeInfo ? $this->upgradeInfo->toArray($noStream) : $this->upgradeInfo;
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
        if (isset($map['UpgradeInfo'])) {
            $model->upgradeInfo = upgradeInfo::fromMap($map['UpgradeInfo']);
        }

        return $model;
    }
}
