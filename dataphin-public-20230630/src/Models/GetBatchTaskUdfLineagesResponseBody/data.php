<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskUdfLineagesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskUdfLineagesResponseBody\data\lineageGroupList;

class data extends Model
{
    /**
     * @var lineageGroupList[]
     */
    public $lineageGroupList;
    protected $_name = [
        'lineageGroupList' => 'LineageGroupList',
    ];

    public function validate()
    {
        if (\is_array($this->lineageGroupList)) {
            Model::validateArray($this->lineageGroupList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lineageGroupList) {
            if (\is_array($this->lineageGroupList)) {
                $res['LineageGroupList'] = [];
                $n1 = 0;
                foreach ($this->lineageGroupList as $item1) {
                    $res['LineageGroupList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LineageGroupList'])) {
            if (!empty($map['LineageGroupList'])) {
                $model->lineageGroupList = [];
                $n1 = 0;
                foreach ($map['LineageGroupList'] as $item1) {
                    $model->lineageGroupList[$n1++] = lineageGroupList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
