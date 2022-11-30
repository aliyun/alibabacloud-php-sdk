<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListReceiptResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $callFailedCount;

    /**
     * @var int
     */
    public $callSuccessCount;

    /**
     * @var int
     */
    public $callTotalCount;

    /**
     * @var string
     */
    public $date;
    protected $_name = [
        'callFailedCount'  => 'CallFailedCount',
        'callSuccessCount' => 'CallSuccessCount',
        'callTotalCount'   => 'CallTotalCount',
        'date'             => 'Date',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callFailedCount) {
            $res['CallFailedCount'] = $this->callFailedCount;
        }
        if (null !== $this->callSuccessCount) {
            $res['CallSuccessCount'] = $this->callSuccessCount;
        }
        if (null !== $this->callTotalCount) {
            $res['CallTotalCount'] = $this->callTotalCount;
        }
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallFailedCount'])) {
            $model->callFailedCount = $map['CallFailedCount'];
        }
        if (isset($map['CallSuccessCount'])) {
            $model->callSuccessCount = $map['CallSuccessCount'];
        }
        if (isset($map['CallTotalCount'])) {
            $model->callTotalCount = $map['CallTotalCount'];
        }
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        return $model;
    }
}
