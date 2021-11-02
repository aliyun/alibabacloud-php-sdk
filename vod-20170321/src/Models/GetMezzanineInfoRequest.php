<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetMezzanineInfoRequest extends Model
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
    public $outputType;

    /**
     * @var string
     */
    public $videoId;
    protected $_name = [
        'additionType' => 'AdditionType',
        'authTimeout'  => 'AuthTimeout',
        'outputType'   => 'OutputType',
        'videoId'      => 'VideoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionType) {
            $res['AdditionType'] = $this->additionType;
        }
        if (null !== $this->authTimeout) {
            $res['AuthTimeout'] = $this->authTimeout;
        }
        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
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
        if (isset($map['AdditionType'])) {
            $model->additionType = $map['AdditionType'];
        }
        if (isset($map['AuthTimeout'])) {
            $model->authTimeout = $map['AuthTimeout'];
        }
        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
