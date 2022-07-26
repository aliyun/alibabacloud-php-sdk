<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models\GetUatDataListResponseBody\data;

use AlibabaCloud\Tea\Model;

class dsList extends Model
{
    /**
     * @var int
     */
    public $dsData;

    /**
     * @var int
     */
    public $dsDay;
    protected $_name = [
        'dsData' => 'DsData',
        'dsDay'  => 'DsDay',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dsData) {
            $res['DsData'] = $this->dsData;
        }
        if (null !== $this->dsDay) {
            $res['DsDay'] = $this->dsDay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dsList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DsData'])) {
            $model->dsData = $map['DsData'];
        }
        if (isset($map['DsDay'])) {
            $model->dsDay = $map['DsDay'];
        }

        return $model;
    }
}
