<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserCdnStatusResponseBody extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @example false
     *
     * @var bool
     */
    public $inDebt;

    /**
     * @example false
     *
     * @var bool
     */
    public $inDebtOverdue;

    /**
     * @example true
     *
     * @var bool
     */
    public $onService;

    /**
     * @example 39B1DC7F-9D25-5D54-8F02-6EE26A7F48CA
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'enabled'       => 'Enabled',
        'inDebt'        => 'InDebt',
        'inDebtOverdue' => 'InDebtOverdue',
        'onService'     => 'OnService',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->inDebt) {
            $res['InDebt'] = $this->inDebt;
        }
        if (null !== $this->inDebtOverdue) {
            $res['InDebtOverdue'] = $this->inDebtOverdue;
        }
        if (null !== $this->onService) {
            $res['OnService'] = $this->onService;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserCdnStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['InDebt'])) {
            $model->inDebt = $map['InDebt'];
        }
        if (isset($map['InDebtOverdue'])) {
            $model->inDebtOverdue = $map['InDebtOverdue'];
        }
        if (isset($map['OnService'])) {
            $model->onService = $map['OnService'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
