<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\ModelOutputContentSyncDetectResponseBody\traceInfo\blockWord;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RAI\V20240701\Models\ModelOutputContentSyncDetectResponseBody\traceInfo\blockWord\blockWordGroupInfoList\blockWordList;

class blockWordGroupInfoList extends Model
{
    /**
     * @var blockWordList[]
     */
    public $blockWordList;

    /**
     * @var string
     */
    public $groupName;
    protected $_name = [
        'blockWordList' => 'BlockWordList',
        'groupName' => 'GroupName',
    ];

    public function validate()
    {
        if (\is_array($this->blockWordList)) {
            Model::validateArray($this->blockWordList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockWordList) {
            if (\is_array($this->blockWordList)) {
                $res['BlockWordList'] = [];
                $n1 = 0;
                foreach ($this->blockWordList as $item1) {
                    $res['BlockWordList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
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
        if (isset($map['BlockWordList'])) {
            if (!empty($map['BlockWordList'])) {
                $model->blockWordList = [];
                $n1 = 0;
                foreach ($map['BlockWordList'] as $item1) {
                    $model->blockWordList[$n1] = blockWordList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
