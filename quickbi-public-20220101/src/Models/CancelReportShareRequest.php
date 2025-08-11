<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class CancelReportShareRequest extends Model
{
    /**
     * @var string
     */
    public $reportId;

    /**
     * @var string
     */
    public $shareToIds;

    /**
     * @var int
     */
    public $shareToType;
    protected $_name = [
        'reportId' => 'ReportId',
        'shareToIds' => 'ShareToIds',
        'shareToType' => 'ShareToType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }

        if (null !== $this->shareToIds) {
            $res['ShareToIds'] = $this->shareToIds;
        }

        if (null !== $this->shareToType) {
            $res['ShareToType'] = $this->shareToType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }

        if (isset($map['ShareToIds'])) {
            $model->shareToIds = $map['ShareToIds'];
        }

        if (isset($map['ShareToType'])) {
            $model->shareToType = $map['ShareToType'];
        }

        return $model;
    }
}
