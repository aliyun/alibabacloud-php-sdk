<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveProducerUsageDataResponseBody\billProducerData;

use AlibabaCloud\Tea\Model;

class billProducerDataItem extends Model
{
    /**
     * @description The domain name. If domain is specified by the SplitBy parameter, the usage data is returned based on different domain names.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The production studio instance. If instance is specified by the SplitBy parameter, the usage data is returned based on different production studio instances.
     *
     * @example a17d0184-462d-4630-b2a6-8c26dde2****
     *
     * @var string
     */
    public $instance;

    /**
     * @description The duration of high definition streaming. Unit: minutes.
     *
     * @example 6000
     *
     * @var int
     */
    public $outputHdDuration;

    /**
     * @description The duration of low definition streaming. Unit: minutes.
     *
     * @example 1001
     *
     * @var int
     */
    public $outputLdDuration;

    /**
     * @description The duration of standard definition streaming. Unit: minutes.
     *
     * @example 500
     *
     * @var int
     */
    public $outputSdDuration;

    /**
     * @description The region. If region is specified by the SplitBy parameter, the usage data is returned based on different regions.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description The timestamp of the returned data.
     *
     * @example 2018-09-30T00:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The duration of high definition transcoding. Unit: minutes.
     *
     * @example 6777
     *
     * @var int
     */
    public $tranHdDuration;

    /**
     * @description The duration of low definition transcoding. Unit: minutes.
     *
     * @example 111
     *
     * @var int
     */
    public $tranLdDuration;

    /**
     * @description The duration of standard definition transcoding. Unit: minutes.
     *
     * @example 666
     *
     * @var int
     */
    public $tranSdDuration;

    /**
     * @description The type of the production studio. If type is specified by the SplitBy parameter, the usage data is returned based on different types of production studios.
     *
     * @example slidelive
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'domainName' => 'DomainName',
        'instance' => 'Instance',
        'outputHdDuration' => 'OutputHdDuration',
        'outputLdDuration' => 'OutputLdDuration',
        'outputSdDuration' => 'OutputSdDuration',
        'region' => 'Region',
        'timeStamp' => 'TimeStamp',
        'tranHdDuration' => 'TranHdDuration',
        'tranLdDuration' => 'TranLdDuration',
        'tranSdDuration' => 'TranSdDuration',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->instance) {
            $res['Instance'] = $this->instance;
        }
        if (null !== $this->outputHdDuration) {
            $res['OutputHdDuration'] = $this->outputHdDuration;
        }
        if (null !== $this->outputLdDuration) {
            $res['OutputLdDuration'] = $this->outputLdDuration;
        }
        if (null !== $this->outputSdDuration) {
            $res['OutputSdDuration'] = $this->outputSdDuration;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->tranHdDuration) {
            $res['TranHdDuration'] = $this->tranHdDuration;
        }
        if (null !== $this->tranLdDuration) {
            $res['TranLdDuration'] = $this->tranLdDuration;
        }
        if (null !== $this->tranSdDuration) {
            $res['TranSdDuration'] = $this->tranSdDuration;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return billProducerDataItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Instance'])) {
            $model->instance = $map['Instance'];
        }
        if (isset($map['OutputHdDuration'])) {
            $model->outputHdDuration = $map['OutputHdDuration'];
        }
        if (isset($map['OutputLdDuration'])) {
            $model->outputLdDuration = $map['OutputLdDuration'];
        }
        if (isset($map['OutputSdDuration'])) {
            $model->outputSdDuration = $map['OutputSdDuration'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['TranHdDuration'])) {
            $model->tranHdDuration = $map['TranHdDuration'];
        }
        if (isset($map['TranLdDuration'])) {
            $model->tranLdDuration = $map['TranLdDuration'];
        }
        if (isset($map['TranSdDuration'])) {
            $model->tranSdDuration = $map['TranSdDuration'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
