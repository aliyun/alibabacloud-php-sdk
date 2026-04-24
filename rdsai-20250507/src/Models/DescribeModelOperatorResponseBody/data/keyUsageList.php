<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeModelOperatorResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeModelOperatorResponseBody\data\keyUsageList\dailyUsage;

class keyUsageList extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var dailyUsage[]
     */
    public $dailyUsage;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var string
     */
    public $keyName;

    /**
     * @var string
     */
    public $keyType;

    /**
     * @var string
     */
    public $keyUsed;

    /**
     * @var string
     */
    public $usedQuota;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'dailyUsage' => 'DailyUsage',
        'deleted' => 'Deleted',
        'keyName' => 'KeyName',
        'keyType' => 'KeyType',
        'keyUsed' => 'KeyUsed',
        'usedQuota' => 'UsedQuota',
    ];

    public function validate()
    {
        if (\is_array($this->dailyUsage)) {
            Model::validateArray($this->dailyUsage);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->dailyUsage) {
            if (\is_array($this->dailyUsage)) {
                $res['DailyUsage'] = [];
                $n1 = 0;
                foreach ($this->dailyUsage as $item1) {
                    $res['DailyUsage'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }

        if (null !== $this->keyName) {
            $res['KeyName'] = $this->keyName;
        }

        if (null !== $this->keyType) {
            $res['KeyType'] = $this->keyType;
        }

        if (null !== $this->keyUsed) {
            $res['KeyUsed'] = $this->keyUsed;
        }

        if (null !== $this->usedQuota) {
            $res['UsedQuota'] = $this->usedQuota;
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
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['DailyUsage'])) {
            if (!empty($map['DailyUsage'])) {
                $model->dailyUsage = [];
                $n1 = 0;
                foreach ($map['DailyUsage'] as $item1) {
                    $model->dailyUsage[$n1] = dailyUsage::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }

        if (isset($map['KeyName'])) {
            $model->keyName = $map['KeyName'];
        }

        if (isset($map['KeyType'])) {
            $model->keyType = $map['KeyType'];
        }

        if (isset($map['KeyUsed'])) {
            $model->keyUsed = $map['KeyUsed'];
        }

        if (isset($map['UsedQuota'])) {
            $model->usedQuota = $map['UsedQuota'];
        }

        return $model;
    }
}
