<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyInstanceSpecResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The result of the dry-run request.
     * - If the DryRun parameter is set to false, no dry run is performed and the DryRunResult parameter returns false.
     * @example false
     *
     * @var bool
     */
    public $dryRunResult;

    /**
     * @description The ID of the order that you have placed.
     *
     * @example 213290*********
     *
     * @var string
     */
    public $orderId;
    protected $_name = [
        'dryRunResult' => 'DryRunResult',
        'orderId'      => 'OrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dryRunResult) {
            $res['DryRunResult'] = $this->dryRunResult;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
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
        if (isset($map['DryRunResult'])) {
            $model->dryRunResult = $map['DryRunResult'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}
