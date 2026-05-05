<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeCreditUsageInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeCreditUsageInfoResponseBody\usageInfoList\usageInfo;

class usageInfoList extends Model
{
    /**
     * @var usageInfo
     */
    public $usageInfo;

    /**
     * @var string
     */
    public $usageInfoKey;
    protected $_name = [
        'usageInfo' => 'UsageInfo',
        'usageInfoKey' => 'UsageInfoKey',
    ];

    public function validate()
    {
        if (null !== $this->usageInfo) {
            $this->usageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->usageInfo) {
            $res['UsageInfo'] = null !== $this->usageInfo ? $this->usageInfo->toArray($noStream) : $this->usageInfo;
        }

        if (null !== $this->usageInfoKey) {
            $res['UsageInfoKey'] = $this->usageInfoKey;
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
        if (isset($map['UsageInfo'])) {
            $model->usageInfo = usageInfo::fromMap($map['UsageInfo']);
        }

        if (isset($map['UsageInfoKey'])) {
            $model->usageInfoKey = $map['UsageInfoKey'];
        }

        return $model;
    }
}
