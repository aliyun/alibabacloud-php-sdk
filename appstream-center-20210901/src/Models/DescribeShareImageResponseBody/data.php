<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DescribeShareImageResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int[]
     */
    public $aliUidList;
    protected $_name = [
        'aliUidList' => 'AliUidList',
    ];

    public function validate()
    {
        if (\is_array($this->aliUidList)) {
            Model::validateArray($this->aliUidList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUidList) {
            if (\is_array($this->aliUidList)) {
                $res['AliUidList'] = [];
                $n1 = 0;
                foreach ($this->aliUidList as $item1) {
                    $res['AliUidList'][$n1] = $item1;
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
        if (isset($map['AliUidList'])) {
            if (!empty($map['AliUidList'])) {
                $model->aliUidList = [];
                $n1 = 0;
                foreach ($map['AliUidList'] as $item1) {
                    $model->aliUidList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
