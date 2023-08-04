<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdsdata\V20220330\Models;

use AlibabaCloud\Tea\Model;

class ResultSetOptions extends Model
{
    /**
     * @var string
     */
    public $decimalReturnType;

    /**
     * @var string
     */
    public $longReturnType;
    protected $_name = [
        'decimalReturnType' => 'DecimalReturnType',
        'longReturnType'    => 'LongReturnType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->decimalReturnType) {
            $res['DecimalReturnType'] = $this->decimalReturnType;
        }
        if (null !== $this->longReturnType) {
            $res['LongReturnType'] = $this->longReturnType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResultSetOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DecimalReturnType'])) {
            $model->decimalReturnType = $map['DecimalReturnType'];
        }
        if (isset($map['LongReturnType'])) {
            $model->longReturnType = $map['LongReturnType'];
        }

        return $model;
    }
}
