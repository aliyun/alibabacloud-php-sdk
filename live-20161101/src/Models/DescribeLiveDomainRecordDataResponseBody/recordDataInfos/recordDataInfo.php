<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRecordDataResponseBody\recordDataInfos;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRecordDataResponseBody\recordDataInfos\recordDataInfo\detail;
use AlibabaCloud\Tea\Model;

class recordDataInfo extends Model
{
    /**
     * @var string
     */
    public $date;

    /**
     * @var int
     */
    public $total;

    /**
     * @var detail
     */
    public $detail;
    protected $_name = [
        'date'   => 'Date',
        'total'  => 'Total',
        'detail' => 'Detail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->detail) {
            $res['Detail'] = null !== $this->detail ? $this->detail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordDataInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Detail'])) {
            $model->detail = detail::fromMap($map['Detail']);
        }

        return $model;
    }
}
