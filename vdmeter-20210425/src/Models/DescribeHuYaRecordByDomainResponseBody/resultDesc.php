<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeHuYaRecordByDomainResponseBody;

use AlibabaCloud\Tea\Model;

class resultDesc extends Model
{
    /**
     * @var string
     */
    public $businessType;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $recordDuration;

    /**
     * @var int
     */
    public $recordNum;

    /**
     * @var string
     */
    public $recordType;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'businessType'   => 'BusinessType',
        'domain'         => 'Domain',
        'recordDuration' => 'RecordDuration',
        'recordNum'      => 'RecordNum',
        'recordType'     => 'RecordType',
        'time'           => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->recordDuration) {
            $res['RecordDuration'] = $this->recordDuration;
        }
        if (null !== $this->recordNum) {
            $res['RecordNum'] = $this->recordNum;
        }
        if (null !== $this->recordType) {
            $res['RecordType'] = $this->recordType;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultDesc
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['RecordDuration'])) {
            $model->recordDuration = $map['RecordDuration'];
        }
        if (isset($map['RecordNum'])) {
            $model->recordNum = $map['RecordNum'];
        }
        if (isset($map['RecordType'])) {
            $model->recordType = $map['RecordType'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
