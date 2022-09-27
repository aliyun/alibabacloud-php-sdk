<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceHistoryEventsResponseBody;

use AlibabaCloud\Tea\Model;

class headers extends Model
{
    /**
     * @var int
     */
    public $xTotalCount;

    /**
     * @var int
     */
    public $xTotalFailed;

    /**
     * @var int
     */
    public $xTotalSuccess;
    protected $_name = [
        'xTotalCount'   => 'X-Total-Count',
        'xTotalFailed'  => 'X-Total-Failed',
        'xTotalSuccess' => 'X-Total-Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->xTotalCount) {
            $res['X-Total-Count'] = $this->xTotalCount;
        }
        if (null !== $this->xTotalFailed) {
            $res['X-Total-Failed'] = $this->xTotalFailed;
        }
        if (null !== $this->xTotalSuccess) {
            $res['X-Total-Success'] = $this->xTotalSuccess;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return headers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['X-Total-Count'])) {
            $model->xTotalCount = $map['X-Total-Count'];
        }
        if (isset($map['X-Total-Failed'])) {
            $model->xTotalFailed = $map['X-Total-Failed'];
        }
        if (isset($map['X-Total-Success'])) {
            $model->xTotalSuccess = $map['X-Total-Success'];
        }

        return $model;
    }
}
