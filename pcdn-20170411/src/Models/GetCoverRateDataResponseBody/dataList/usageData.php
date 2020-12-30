<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models\GetCoverRateDataResponseBody\dataList;

use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetCoverRateDataResponseBody\dataList\usageData\values;
use AlibabaCloud\Tea\Model;

class usageData extends Model
{
    /**
     * @var values
     */
    public $values;

    /**
     * @var string
     */
    public $date;
    protected $_name = [
        'values' => 'Values',
        'date'   => 'Date',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->values) {
            $res['Values'] = null !== $this->values ? $this->values->toMap() : null;
        }
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usageData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Values'])) {
            $model->values = values::fromMap($map['Values']);
        }
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        return $model;
    }
}
