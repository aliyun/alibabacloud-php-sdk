<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\BatchUpdateFileTagResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Bailian\V20231229\Models\BatchUpdateFileTagResponseBody\data\updateFileTagResultList;

class data extends Model
{
    /**
     * @var updateFileTagResultList[]
     */
    public $updateFileTagResultList;
    protected $_name = [
        'updateFileTagResultList' => 'UpdateFileTagResultList',
    ];

    public function validate()
    {
        if (\is_array($this->updateFileTagResultList)) {
            Model::validateArray($this->updateFileTagResultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->updateFileTagResultList) {
            if (\is_array($this->updateFileTagResultList)) {
                $res['UpdateFileTagResultList'] = [];
                $n1 = 0;
                foreach ($this->updateFileTagResultList as $item1) {
                    $res['UpdateFileTagResultList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['UpdateFileTagResultList'])) {
            if (!empty($map['UpdateFileTagResultList'])) {
                $model->updateFileTagResultList = [];
                $n1 = 0;
                foreach ($map['UpdateFileTagResultList'] as $item1) {
                    $model->updateFileTagResultList[$n1] = updateFileTagResultList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
