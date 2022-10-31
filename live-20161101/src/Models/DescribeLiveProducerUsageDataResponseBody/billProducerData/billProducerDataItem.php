<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveProducerUsageDataResponseBody\billProducerData;

use AlibabaCloud\Tea\Model;

class billProducerDataItem extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $instance;

    /**
     * @var int
     */
    public $outputHdDuration;

    /**
     * @var int
     */
    public $outputLdDuration;

    /**
     * @var int
     */
    public $outputSdDuration;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var int
     */
    public $tranHdDuration;

    /**
     * @var int
     */
    public $tranLdDuration;

    /**
     * @var int
     */
    public $tranSdDuration;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'domainName'       => 'DomainName',
        'instance'         => 'Instance',
        'outputHdDuration' => 'OutputHdDuration',
        'outputLdDuration' => 'OutputLdDuration',
        'outputSdDuration' => 'OutputSdDuration',
        'region'           => 'Region',
        'timeStamp'        => 'TimeStamp',
        'tranHdDuration'   => 'TranHdDuration',
        'tranLdDuration'   => 'TranLdDuration',
        'tranSdDuration'   => 'TranSdDuration',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

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
