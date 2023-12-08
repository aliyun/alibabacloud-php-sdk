<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20200710\Models;

use AlibabaCloud\Tea\Model;

class BillingApplicationRequest extends Model
{
    /**
     * @var int
     */
    public $month;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $year;
    protected $_name = [
        'month'           => 'Month',
        'resourceGroupId' => 'ResourceGroupId',
        'year'            => 'Year',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->month) {
            $res['Month'] = $this->month;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->year) {
            $res['Year'] = $this->year;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BillingApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Month'])) {
            $model->month = $map['Month'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Year'])) {
            $model->year = $map['Year'];
        }

        return $model;
    }
}
