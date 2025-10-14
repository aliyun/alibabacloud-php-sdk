<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeRdsVswitchesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeRdsVswitchesResponseBody\data\vswitchList;

class data extends Model
{
    /**
     * @var vswitchList[]
     */
    public $vswitchList;
    protected $_name = [
        'vswitchList' => 'VswitchList',
    ];

    public function validate()
    {
        if (\is_array($this->vswitchList)) {
            Model::validateArray($this->vswitchList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vswitchList) {
            if (\is_array($this->vswitchList)) {
                $res['VswitchList'] = [];
                $n1 = 0;
                foreach ($this->vswitchList as $item1) {
                    $res['VswitchList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['VswitchList'])) {
            if (!empty($map['VswitchList'])) {
                $model->vswitchList = [];
                $n1 = 0;
                foreach ($map['VswitchList'] as $item1) {
                    $model->vswitchList[$n1] = vswitchList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
