<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetMezzanineInfoRequest extends Model
{
    /**
     * @var string
     */
    public $videoId;

    /**
     * @var int
     */
    public $authTimeout;

    /**
     * @var bool
     */
    public $previewSegment;

    /**
     * @var string
     */
    public $outputType;

    /**
     * @var string
     */
    public $additionType;
    protected $_name = [
        'videoId'        => 'VideoId',
        'authTimeout'    => 'AuthTimeout',
        'previewSegment' => 'PreviewSegment',
        'outputType'     => 'OutputType',
        'additionType'   => 'AdditionType',
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
        if (null !== $this->authTimeout) {
            $res['AuthTimeout'] = $this->authTimeout;
        }
        if (null !== $this->previewSegment) {
            $res['PreviewSegment'] = $this->previewSegment;
        }
        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }
        if (null !== $this->additionType) {
            $res['AdditionType'] = $this->additionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMezzanineInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['AuthTimeout'])) {
            $model->authTimeout = $map['AuthTimeout'];
        }
        if (isset($map['PreviewSegment'])) {
            $model->previewSegment = $map['PreviewSegment'];
        }
        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }
        if (isset($map['AdditionType'])) {
            $model->additionType = $map['AdditionType'];
        }

        return $model;
    }
}
