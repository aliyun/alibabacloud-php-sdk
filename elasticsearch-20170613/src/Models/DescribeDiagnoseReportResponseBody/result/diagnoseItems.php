<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDiagnoseReportResponseBody\result;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDiagnoseReportResponseBody\result\diagnoseItems\detail;
use AlibabaCloud\Tea\Model;

class diagnoseItems extends Model
{
    /**
     * @var detail
     */
    public $detail;

    /**
     * @var string
     */
    public $health;

    /**
     * @var string
     */
    public $item;
    protected $_name = [
        'detail' => 'detail',
        'health' => 'health',
        'item'   => 'item',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['detail'] = null !== $this->detail ? $this->detail->toMap() : null;
        }
        if (null !== $this->health) {
            $res['health'] = $this->health;
        }
        if (null !== $this->item) {
            $res['item'] = $this->item;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diagnoseItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['detail'])) {
            $model->detail = detail::fromMap($map['detail']);
        }
        if (isset($map['health'])) {
            $model->health = $map['health'];
        }
        if (isset($map['item'])) {
            $model->item = $map['item'];
        }

        return $model;
    }
}
