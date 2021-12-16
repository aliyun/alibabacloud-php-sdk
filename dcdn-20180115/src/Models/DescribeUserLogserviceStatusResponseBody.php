<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserLogserviceStatusResponseBody extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var bool
     */
    public $inDebt;

    /**
     * @var bool
     */
    public $inDebtOverdue;

    /**
     * @var bool
     */
    public $onService;

    /**
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
     * @return DescribeUserLogserviceStatusResponseBody
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
