<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ModifyPushAllTaskResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyPushAllTaskResponseBody\pushTaskRsp\pushTaskResultList;
use AlibabaCloud\Tea\Model;

class pushTaskRsp extends Model
{
    /**
     * @description An array consisting of the servers on which security check tasks failed.
     *
     * @var pushTaskResultList[]
     */
    public $pushTaskResultList;
    protected $_name = [
        'pushTaskResultList' => 'PushTaskResultList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pushTaskResultList) {
            $res['PushTaskResultList'] = [];
            if (null !== $this->pushTaskResultList && \is_array($this->pushTaskResultList)) {
                $n = 0;
                foreach ($this->pushTaskResultList as $item) {
                    $res['PushTaskResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pushTaskRsp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PushTaskResultList'])) {
            if (!empty($map['PushTaskResultList'])) {
                $model->pushTaskResultList = [];
                $n                         = 0;
                foreach ($map['PushTaskResultList'] as $item) {
                    $model->pushTaskResultList[$n++] = null !== $item ? pushTaskResultList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
