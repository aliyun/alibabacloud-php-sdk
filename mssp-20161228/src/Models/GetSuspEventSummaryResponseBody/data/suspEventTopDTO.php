<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspEventSummaryResponseBody\data;

use AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspEventSummaryResponseBody\data\suspEventTopDTO\suspEventList;
use AlibabaCloud\Tea\Model;

class suspEventTopDTO extends Model
{
    /**
     * @var suspEventList[]
     */
    public $suspEventList;
    protected $_name = [
        'suspEventList' => 'SuspEventList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->suspEventList) {
            $res['SuspEventList'] = [];
            if (null !== $this->suspEventList && \is_array($this->suspEventList)) {
                $n = 0;
                foreach ($this->suspEventList as $item) {
                    $res['SuspEventList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return suspEventTopDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SuspEventList'])) {
            if (!empty($map['SuspEventList'])) {
                $model->suspEventList = [];
                $n                    = 0;
                foreach ($map['SuspEventList'] as $item) {
                    $model->suspEventList[$n++] = null !== $item ? suspEventList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
