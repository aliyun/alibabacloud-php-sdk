<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetPlayInfoRequest extends Model
{
    /**
     * @var string
     */
    public $videoId;

    /**
     * @var string
     */
    public $formats;

    /**
     * @var int
     */
    public $authTimeout;

    /**
     * @var string
     */
    public $outputType;

    /**
     * @var string
     */
    public $streamType;

    /**
     * @var string
     */
    public $reAuthInfo;

    /**
     * @var string
     */
    public $definition;

    /**
     * @var string
     */
    public $resultType;

    /**
     * @var string
     */
    public $playConfig;

    /**
     * @var string
     */
    public $additionType;
    protected $_name = [
        'videoId'      => 'VideoId',
        'formats'      => 'Formats',
        'authTimeout'  => 'AuthTimeout',
        'outputType'   => 'OutputType',
        'streamType'   => 'StreamType',
        'reAuthInfo'   => 'ReAuthInfo',
        'definition'   => 'Definition',
        'resultType'   => 'ResultType',
        'playConfig'   => 'PlayConfig',
        'additionType' => 'AdditionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->formats) {
            $res['Formats'] = $this->formats;
        }
        if (null !== $this->authTimeout) {
            $res['AuthTimeout'] = $this->authTimeout;
        }
        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }
        if (null !== $this->reAuthInfo) {
            $res['ReAuthInfo'] = $this->reAuthInfo;
        }
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
        }
        if (null !== $this->playConfig) {
            $res['PlayConfig'] = $this->playConfig;
        }
        if (null !== $this->additionType) {
            $res['AdditionType'] = $this->additionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPlayInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['Formats'])) {
            $model->formats = $map['Formats'];
        }
        if (isset($map['AuthTimeout'])) {
            $model->authTimeout = $map['AuthTimeout'];
        }
        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }
        if (isset($map['ReAuthInfo'])) {
            $model->reAuthInfo = $map['ReAuthInfo'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['ResultType'])) {
            $model->resultType = $map['ResultType'];
        }
        if (isset($map['PlayConfig'])) {
            $model->playConfig = $map['PlayConfig'];
        }
        if (isset($map['AdditionType'])) {
            $model->additionType = $map['AdditionType'];
        }

        return $model;
    }
}
