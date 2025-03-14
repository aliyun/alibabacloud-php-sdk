<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetConsoleFuncGrayStatusResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetConsoleFuncGrayStatusResponseBody\data\excludeApiList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description List of APIs not hit.
     *
     * @var excludeApiList[]
     */
    public $excludeApiList;

    /**
     * @description Whether it hits the gray status.
     *
     * @example true
     *
     * @var bool
     */
    public $hit;
    protected $_name = [
        'excludeApiList' => 'ExcludeApiList',
        'hit' => 'Hit',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->excludeApiList) {
            $res['ExcludeApiList'] = [];
            if (null !== $this->excludeApiList && \is_array($this->excludeApiList)) {
                $n = 0;
                foreach ($this->excludeApiList as $item) {
                    $res['ExcludeApiList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hit) {
            $res['Hit'] = $this->hit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExcludeApiList'])) {
            if (!empty($map['ExcludeApiList'])) {
                $model->excludeApiList = [];
                $n = 0;
                foreach ($map['ExcludeApiList'] as $item) {
                    $model->excludeApiList[$n++] = null !== $item ? excludeApiList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Hit'])) {
            $model->hit = $map['Hit'];
        }

        return $model;
    }
}
