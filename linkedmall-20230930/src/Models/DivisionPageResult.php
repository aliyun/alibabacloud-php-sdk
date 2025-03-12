<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DivisionPageResult extends Model
{
    /**
     * @var Division[]
     */
    public $divisionList;

    /**
     * @example 3239281273464326823
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'divisionList' => 'divisionList',
        'requestId'    => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->divisionList) {
            $res['divisionList'] = [];
            if (null !== $this->divisionList && \is_array($this->divisionList)) {
                $n = 0;
                foreach ($this->divisionList as $item) {
                    $res['divisionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DivisionPageResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['divisionList'])) {
            if (!empty($map['divisionList'])) {
                $model->divisionList = [];
                $n                   = 0;
                foreach ($map['divisionList'] as $item) {
                    $model->divisionList[$n++] = null !== $item ? Division::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
