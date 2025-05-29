<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainUvDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainUvDataResponseBody\uvDataInterval\usageData;

class uvDataInterval extends Model
{
    /**
     * @var usageData[]
     */
    public $usageData;
    protected $_name = [
        'usageData' => 'UsageData',
    ];

    public function validate()
    {
        if (\is_array($this->usageData)) {
            Model::validateArray($this->usageData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->usageData) {
            if (\is_array($this->usageData)) {
                $res['UsageData'] = [];
                $n1 = 0;
                foreach ($this->usageData as $item1) {
                    $res['UsageData'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['UsageData'])) {
            if (!empty($map['UsageData'])) {
                $model->usageData = [];
                $n1 = 0;
                foreach ($map['UsageData'] as $item1) {
                    $model->usageData[$n1++] = usageData::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
