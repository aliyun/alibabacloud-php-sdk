<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserDcdnStatusResponseBody extends Model
{
    /**
     * @description Indicates whether the DCDN service is activated.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description Indicates whether your account has overdue payments.
     *
     * @example false
     *
     * @var bool
     */
    public $inDebt;

    /**
     * @description Indicates whether the grace period for your overdue payments expired.
     *
     * @example false
     *
     * @var bool
     */
    public $inDebtOverdue;

    /**
     * @description Indicates whether the service is available.
     *
     * @example true
     *
     * @var bool
     */
    public $onService;

    /**
     * @description The ID of the request.
     *
     * @example 4F51E9C3-728F-4E35-952D-0ED87A06A8A1
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
     * @return DescribeUserDcdnStatusResponseBody
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
