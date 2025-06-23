<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeBlockStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeBlockStatusResponseBody\statusList\blockStatusList;

class statusList extends Model
{
    /**
     * @var blockStatusList[]
     */
    public $blockStatusList;

    /**
     * @var string
     */
    public $ip;
    protected $_name = [
        'blockStatusList' => 'BlockStatusList',
        'ip' => 'Ip',
    ];

    public function validate()
    {
        if (\is_array($this->blockStatusList)) {
            Model::validateArray($this->blockStatusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockStatusList) {
            if (\is_array($this->blockStatusList)) {
                $res['BlockStatusList'] = [];
                $n1 = 0;
                foreach ($this->blockStatusList as $item1) {
                    $res['BlockStatusList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
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
        if (isset($map['BlockStatusList'])) {
            if (!empty($map['BlockStatusList'])) {
                $model->blockStatusList = [];
                $n1 = 0;
                foreach ($map['BlockStatusList'] as $item1) {
                    $model->blockStatusList[$n1] = blockStatusList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        return $model;
    }
}
