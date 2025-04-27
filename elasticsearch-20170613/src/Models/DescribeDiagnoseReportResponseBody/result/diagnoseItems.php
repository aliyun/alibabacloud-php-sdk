<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDiagnoseReportResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDiagnoseReportResponseBody\result\diagnoseItems\detail;

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
        'item' => 'item',
    ];

    public function validate()
    {
        if (null !== $this->detail) {
            $this->detail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detail) {
            $res['detail'] = null !== $this->detail ? $this->detail->toArray($noStream) : $this->detail;
        }

        if (null !== $this->health) {
            $res['health'] = $this->health;
        }

        if (null !== $this->item) {
            $res['item'] = $this->item;
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
