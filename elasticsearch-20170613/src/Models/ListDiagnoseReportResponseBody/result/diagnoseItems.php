<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDiagnoseReportResponseBody\result;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDiagnoseReportResponseBody\result\diagnoseItems\detail;
use AlibabaCloud\Tea\Model;

class diagnoseItems extends Model
{
    /**
     * @var string
     */
    public $item;

    /**
     * @var string
     */
    public $health;

    /**
     * @var detail
     */
    public $detail;
    protected $_name = [
        'item'   => 'item',
        'health' => 'health',
        'detail' => 'detail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->item) {
            $res['item'] = $this->item;
        }
        if (null !== $this->health) {
            $res['health'] = $this->health;
        }
        if (null !== $this->detail) {
            $res['detail'] = null !== $this->detail ? $this->detail->toMap() : null;
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
        if (isset($map['item'])) {
            $model->item = $map['item'];
        }
        if (isset($map['health'])) {
            $model->health = $map['health'];
        }
        if (isset($map['detail'])) {
            $model->detail = detail::fromMap($map['detail']);
        }

        return $model;
    }
}
