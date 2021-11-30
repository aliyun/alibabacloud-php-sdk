<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class GetRepoTagScanSummaryResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $highSeverity;

    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var int
     */
    public $lowSeverity;

    /**
     * @var int
     */
    public $mediumSeverity;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalSeverity;

    /**
     * @var int
     */
    public $unknownSeverity;
    protected $_name = [
        'code'            => 'Code',
        'highSeverity'    => 'HighSeverity',
        'isSuccess'       => 'IsSuccess',
        'lowSeverity'     => 'LowSeverity',
        'mediumSeverity'  => 'MediumSeverity',
        'requestId'       => 'RequestId',
        'totalSeverity'   => 'TotalSeverity',
        'unknownSeverity' => 'UnknownSeverity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->highSeverity) {
            $res['HighSeverity'] = $this->highSeverity;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->lowSeverity) {
            $res['LowSeverity'] = $this->lowSeverity;
        }
        if (null !== $this->mediumSeverity) {
            $res['MediumSeverity'] = $this->mediumSeverity;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalSeverity) {
            $res['TotalSeverity'] = $this->totalSeverity;
        }
        if (null !== $this->unknownSeverity) {
            $res['UnknownSeverity'] = $this->unknownSeverity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRepoTagScanSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HighSeverity'])) {
            $model->highSeverity = $map['HighSeverity'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['LowSeverity'])) {
            $model->lowSeverity = $map['LowSeverity'];
        }
        if (isset($map['MediumSeverity'])) {
            $model->mediumSeverity = $map['MediumSeverity'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalSeverity'])) {
            $model->totalSeverity = $map['TotalSeverity'];
        }
        if (isset($map['UnknownSeverity'])) {
            $model->unknownSeverity = $map['UnknownSeverity'];
        }

        return $model;
    }
}
