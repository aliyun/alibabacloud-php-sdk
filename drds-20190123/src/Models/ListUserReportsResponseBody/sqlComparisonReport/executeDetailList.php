<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\ListUserReportsResponseBody\sqlComparisonReport;

use AlibabaCloud\SDK\Drds\V20190123\Models\ListUserReportsResponseBody\sqlComparisonReport\executeDetailList\executeDetail;
use AlibabaCloud\Tea\Model;

class executeDetailList extends Model
{
    /**
     * @var executeDetail[]
     */
    public $executeDetail;
    protected $_name = [
        'executeDetail' => 'executeDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executeDetail) {
            $res['executeDetail'] = [];
            if (null !== $this->executeDetail && \is_array($this->executeDetail)) {
                $n = 0;
                foreach ($this->executeDetail as $item) {
                    $res['executeDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return executeDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['executeDetail'])) {
            if (!empty($map['executeDetail'])) {
                $model->executeDetail = [];
                $n                    = 0;
                foreach ($map['executeDetail'] as $item) {
                    $model->executeDetail[$n++] = null !== $item ? executeDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
