<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeBlockStatusResponseBody;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeBlockStatusResponseBody\statusList\blockStatusList;
use AlibabaCloud\Tea\Model;

class statusList extends Model
{
    /**
     * @var string
     */
    public $ip;

    /**
     * @var blockStatusList[]
     */
    public $blockStatusList;
    protected $_name = [
        'ip'              => 'Ip',
        'blockStatusList' => 'BlockStatusList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->blockStatusList) {
            $res['BlockStatusList'] = [];
            if (null !== $this->blockStatusList && \is_array($this->blockStatusList)) {
                $n = 0;
                foreach ($this->blockStatusList as $item) {
                    $res['BlockStatusList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statusList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['BlockStatusList'])) {
            if (!empty($map['BlockStatusList'])) {
                $model->blockStatusList = [];
                $n                      = 0;
                foreach ($map['BlockStatusList'] as $item) {
                    $model->blockStatusList[$n++] = null !== $item ? blockStatusList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
