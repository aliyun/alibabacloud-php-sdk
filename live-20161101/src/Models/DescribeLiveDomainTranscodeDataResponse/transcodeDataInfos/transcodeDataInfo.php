<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainTranscodeDataResponse\transcodeDataInfos;

use AlibabaCloud\Tea\Model;

class transcodeDataInfo extends Model
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
     * @var string
     */
    public $detail;
    protected $_name = [
        'date'   => 'Date',
        'total'  => 'Total',
        'detail' => 'Detail',
    ];

    public function validate()
    {
        Model::validateRequired('date', $this->date, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('detail', $this->detail, true);
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
            $res['Detail'] = $this->detail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcodeDataInfo
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
            $model->detail = $map['Detail'];
        }

        return $model;
    }
}
