<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemPreviewResponseBody;

use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemPreviewResponseBody\data\mail;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemPreviewResponseBody\data\problem;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemPreviewResponseBody\data\sms;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemPreviewResponseBody\data\voice;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemPreviewResponseBody\data\webhook;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var problem
     */
    public $problem;

    /**
     * @description 语音
     *
     * @var voice
     */
    public $voice;

    /**
     * @description 邮箱
     *
     * @var mail
     */
    public $mail;

    /**
     * @description 短信
     *
     * @var sms
     */
    public $sms;

    /**
     * @description webhook
     *
     * @var webhook
     */
    public $webhook;

    /**
     * @description 升级前数据
     *
     * @var string
     */
    public $upBeforeData;

    /**
     * @description 升级后数据
     *
     * @var string
     */
    public $upAfterData;

    /**
     * @description 降级前数据
     *
     * @var string
     */
    public $deBeforeData;

    /**
     * @description 降级后数据
     *
     * @var string
     */
    public $deAfterData;
    protected $_name = [
        'problem'      => 'problem',
        'voice'        => 'voice',
        'mail'         => 'mail',
        'sms'          => 'sms',
        'webhook'      => 'webhook',
        'upBeforeData' => 'upBeforeData',
        'upAfterData'  => 'upAfterData',
        'deBeforeData' => 'deBeforeData',
        'deAfterData'  => 'deAfterData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->problem) {
            $res['problem'] = null !== $this->problem ? $this->problem->toMap() : null;
        }
        if (null !== $this->voice) {
            $res['voice'] = null !== $this->voice ? $this->voice->toMap() : null;
        }
        if (null !== $this->mail) {
            $res['mail'] = null !== $this->mail ? $this->mail->toMap() : null;
        }
        if (null !== $this->sms) {
            $res['sms'] = null !== $this->sms ? $this->sms->toMap() : null;
        }
        if (null !== $this->webhook) {
            $res['webhook'] = null !== $this->webhook ? $this->webhook->toMap() : null;
        }
        if (null !== $this->upBeforeData) {
            $res['upBeforeData'] = $this->upBeforeData;
        }
        if (null !== $this->upAfterData) {
            $res['upAfterData'] = $this->upAfterData;
        }
        if (null !== $this->deBeforeData) {
            $res['deBeforeData'] = $this->deBeforeData;
        }
        if (null !== $this->deAfterData) {
            $res['deAfterData'] = $this->deAfterData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['problem'])) {
            $model->problem = problem::fromMap($map['problem']);
        }
        if (isset($map['voice'])) {
            $model->voice = voice::fromMap($map['voice']);
        }
        if (isset($map['mail'])) {
            $model->mail = mail::fromMap($map['mail']);
        }
        if (isset($map['sms'])) {
            $model->sms = sms::fromMap($map['sms']);
        }
        if (isset($map['webhook'])) {
            $model->webhook = webhook::fromMap($map['webhook']);
        }
        if (isset($map['upBeforeData'])) {
            $model->upBeforeData = $map['upBeforeData'];
        }
        if (isset($map['upAfterData'])) {
            $model->upAfterData = $map['upAfterData'];
        }
        if (isset($map['deBeforeData'])) {
            $model->deBeforeData = $map['deBeforeData'];
        }
        if (isset($map['deAfterData'])) {
            $model->deAfterData = $map['deAfterData'];
        }

        return $model;
    }
}
