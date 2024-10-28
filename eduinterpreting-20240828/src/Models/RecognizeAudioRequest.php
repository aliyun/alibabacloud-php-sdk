<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduInterpreting\V20240828\Models;

use AlibabaCloud\Tea\Model;

class RecognizeAudioRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example http://xx.com/abc.mp3
     *
     * @var string
     */
    public $audioFileUrl;

    /**
     * @example https://abc.edu.org.cn/en/callback
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @description This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $enableCallBack;

    /**
     * @description This parameter is required.
     *
     * @example 433c1361-0f6e-48fc-ad51
     *
     * @var string
     */
    public $outerBizId;
    protected $_name = [
        'audioFileUrl'   => 'AudioFileUrl',
        'callbackUrl'    => 'CallbackUrl',
        'enableCallBack' => 'EnableCallBack',
        'outerBizId'     => 'OuterBizId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioFileUrl) {
            $res['AudioFileUrl'] = $this->audioFileUrl;
        }
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->enableCallBack) {
            $res['EnableCallBack'] = $this->enableCallBack;
        }
        if (null !== $this->outerBizId) {
            $res['OuterBizId'] = $this->outerBizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeAudioRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioFileUrl'])) {
            $model->audioFileUrl = $map['AudioFileUrl'];
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['EnableCallBack'])) {
            $model->enableCallBack = $map['EnableCallBack'];
        }
        if (isset($map['OuterBizId'])) {
            $model->outerBizId = $map['OuterBizId'];
        }

        return $model;
    }
}
