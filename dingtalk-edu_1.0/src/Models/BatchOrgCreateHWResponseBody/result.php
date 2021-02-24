<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vedu_1_0\Models\BatchOrgCreateHWResponseBody;

use AlibabaCloud\SDK\Dingtalk\Vedu_1_0\Models\BatchOrgCreateHWResponseBody\result\publishList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var publishList[]
     */
    public $publishList;
    protected $_name = [
        'publishList' => 'publishList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->publishList) {
            $res['publishList'] = [];
            if (null !== $this->publishList && \is_array($this->publishList)) {
                $n = 0;
                foreach ($this->publishList as $item) {
                    $res['publishList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['publishList'])) {
            if (!empty($map['publishList'])) {
                $model->publishList = [];
                $n                  = 0;
                foreach ($map['publishList'] as $item) {
                    $model->publishList[$n++] = null !== $item ? publishList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
