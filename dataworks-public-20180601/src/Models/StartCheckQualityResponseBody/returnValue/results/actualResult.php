<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\StartCheckQualityResponseBody\returnValue\results;

use AlibabaCloud\Tea\Model;

class actualResult extends Model
{
    /**
     * @var string
     */
    public $actualThreshold;

    /**
     * @var string
     */
    public $bizDate;

    /**
     * @var string
     */
    public $property;

    /**
     * @var string
     */
    public $result;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'actualThreshold' => 'ActualThreshold',
        'bizDate'         => 'BizDate',
        'property'        => 'Property',
        'result'          => 'Result',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualThreshold) {
            $res['ActualThreshold'] = $this->actualThreshold;
        }
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }
        if (null !== $this->property) {
            $res['Property'] = $this->property;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return actualResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActualThreshold'])) {
            $model->actualThreshold = $map['ActualThreshold'];
        }
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }
        if (isset($map['Property'])) {
            $model->property = $map['Property'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
