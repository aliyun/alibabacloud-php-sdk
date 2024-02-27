<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\ExportCustomerQuotaRecordResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Estimated duration, in minutes.
     *
     * @example 1
     *
     * @var int
     */
    public $cost;

    /**
     * @description ID of Export task
     *
     * @example 1231
     *
     * @var int
     */
    public $id;
    protected $_name = [
        'cost' => 'Cost',
        'id'   => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cost) {
            $res['Cost'] = $this->cost;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cost'])) {
            $model->cost = $map['Cost'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
