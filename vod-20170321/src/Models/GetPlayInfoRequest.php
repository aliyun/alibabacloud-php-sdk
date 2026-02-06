<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class GetPlayInfoRequest extends Model
{
    /**
     * @var string
     */
    public $additionType;

    /**
     * @var int
     */
    public $authTimeout;

    /**
     * @var string
     */
    public $codecName;

    /**
     * @var string
     */
    public $definition;

    /**
     * @var string
     */
    public $digitalWatermarkType;

    /**
     * @var string
     */
    public $formats;

    /**
     * @var string
     */
    public $outputType;

    /**
     * @var string
     */
    public $playConfig;

    /**
     * @var string
     */
    public $reAuthInfo;

    /**
     * @var string
     */
    public $referenceId;

    /**
     * @var string
     */
    public $resultType;

    /**
     * @var string
     */
    public $streamType;

    /**
     * @var string
     */
    public $trace;

    /**
     * @var string
     */
    public $videoId;
    protected $_name = [
        'additionType' => 'AdditionType',
        'authTimeout' => 'AuthTimeout',
        'codecName' => 'CodecName',
        'definition' => 'Definition',
        'digitalWatermarkType' => 'DigitalWatermarkType',
        'formats' => 'Formats',
        'outputType' => 'OutputType',
        'playConfig' => 'PlayConfig',
        'reAuthInfo' => 'ReAuthInfo',
        'referenceId' => 'ReferenceId',
        'resultType' => 'ResultType',
        'streamType' => 'StreamType',
        'trace' => 'Trace',
        'videoId' => 'VideoId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->additionType) {
            $res['AdditionType'] = $this->additionType;
        }

        if (null !== $this->authTimeout) {
            $res['AuthTimeout'] = $this->authTimeout;
        }

        if (null !== $this->codecName) {
            $res['CodecName'] = $this->codecName;
        }

        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }

        if (null !== $this->digitalWatermarkType) {
            $res['DigitalWatermarkType'] = $this->digitalWatermarkType;
        }

        if (null !== $this->formats) {
            $res['Formats'] = $this->formats;
        }

        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }

        if (null !== $this->playConfig) {
            $res['PlayConfig'] = $this->playConfig;
        }

        if (null !== $this->reAuthInfo) {
            $res['ReAuthInfo'] = $this->reAuthInfo;
        }

        if (null !== $this->referenceId) {
            $res['ReferenceId'] = $this->referenceId;
        }

        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
        }

        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }

        if (null !== $this->trace) {
            $res['Trace'] = $this->trace;
        }

        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
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
        if (isset($map['AdditionType'])) {
            $model->additionType = $map['AdditionType'];
        }

        if (isset($map['AuthTimeout'])) {
            $model->authTimeout = $map['AuthTimeout'];
        }

        if (isset($map['CodecName'])) {
            $model->codecName = $map['CodecName'];
        }

        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }

        if (isset($map['DigitalWatermarkType'])) {
            $model->digitalWatermarkType = $map['DigitalWatermarkType'];
        }

        if (isset($map['Formats'])) {
            $model->formats = $map['Formats'];
        }

        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }

        if (isset($map['PlayConfig'])) {
            $model->playConfig = $map['PlayConfig'];
        }

        if (isset($map['ReAuthInfo'])) {
            $model->reAuthInfo = $map['ReAuthInfo'];
        }

        if (isset($map['ReferenceId'])) {
            $model->referenceId = $map['ReferenceId'];
        }

        if (isset($map['ResultType'])) {
            $model->resultType = $map['ResultType'];
        }

        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }

        if (isset($map['Trace'])) {
            $model->trace = $map['Trace'];
        }

        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
