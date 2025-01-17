<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ModifyPushAllTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyPushAllTaskResponseBody\pushTaskRsp\pushTaskResultList;

class pushTaskRsp extends Model
{
    /**
     * @var pushTaskResultList[]
     */
    public $pushTaskResultList;
    protected $_name = [
        'pushTaskResultList' => 'PushTaskResultList',
    ];

    public function validate()
    {
        if (\is_array($this->pushTaskResultList)) {
            Model::validateArray($this->pushTaskResultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pushTaskResultList) {
            if (\is_array($this->pushTaskResultList)) {
                $res['PushTaskResultList'] = [];
                $n1                        = 0;
                foreach ($this->pushTaskResultList as $item1) {
                    $res['PushTaskResultList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PushTaskResultList'])) {
            if (!empty($map['PushTaskResultList'])) {
                $model->pushTaskResultList = [];
                $n1                        = 0;
                foreach ($map['PushTaskResultList'] as $item1) {
                    $model->pushTaskResultList[$n1++] = pushTaskResultList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
