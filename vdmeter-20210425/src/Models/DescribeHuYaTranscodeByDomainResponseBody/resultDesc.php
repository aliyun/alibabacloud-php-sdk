<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeHuYaTranscodeByDomainResponseBody;

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
     * @var string
     */
    public $time;

    /**
     * @var int
     */
    public $transcodeDuration;

    /**
     * @var int
     */
    public $transcodeNum;

    /**
     * @var string
     */
    public $transcodeType;
    protected $_name = [
        'businessType'      => 'BusinessType',
        'domain'            => 'Domain',
        'time'              => 'Time',
        'transcodeDuration' => 'TranscodeDuration',
        'transcodeNum'      => 'TranscodeNum',
        'transcodeType'     => 'TranscodeType',
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
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->transcodeDuration) {
            $res['TranscodeDuration'] = $this->transcodeDuration;
        }
        if (null !== $this->transcodeNum) {
            $res['TranscodeNum'] = $this->transcodeNum;
        }
        if (null !== $this->transcodeType) {
            $res['TranscodeType'] = $this->transcodeType;
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
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['TranscodeDuration'])) {
            $model->transcodeDuration = $map['TranscodeDuration'];
        }
        if (isset($map['TranscodeNum'])) {
            $model->transcodeNum = $map['TranscodeNum'];
        }
        if (isset($map['TranscodeType'])) {
            $model->transcodeType = $map['TranscodeType'];
        }

        return $model;
    }
}
