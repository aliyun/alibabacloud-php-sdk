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
     * @var string
     */
    public $deAfterData;

    /**
     * @var string
     */
    public $deBeforeData;

    /**
     * @var mail
     */
    public $mail;

    /**
     * @description object
     *
     * @var problem
     */
    public $problem;

    /**
     * @var sms
     */
    public $sms;

    /**
     * @var string
     */
    public $upAfterData;

    /**
     * @var string
     */
    public $upBeforeData;

    /**
     * @var voice
     */
    public $voice;

    /**
     * @description webhook
     *
     * @var webhook
     */
    public $webhook;
    protected $_name = [
        'deAfterData'  => 'deAfterData',
        'deBeforeData' => 'deBeforeData',
        'mail'         => 'mail',
        'problem'      => 'problem',
        'sms'          => 'sms',
        'upAfterData'  => 'upAfterData',
        'upBeforeData' => 'upBeforeData',
        'voice'        => 'voice',
        'webhook'      => 'webhook',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deAfterData) {
            $res['deAfterData'] = $this->deAfterData;
        }
        if (null !== $this->deBeforeData) {
            $res['deBeforeData'] = $this->deBeforeData;
        }
        if (null !== $this->mail) {
            $res['mail'] = null !== $this->mail ? $this->mail->toMap() : null;
        }
        if (null !== $this->problem) {
            $res['problem'] = null !== $this->problem ? $this->problem->toMap() : null;
        }
        if (null !== $this->sms) {
            $res['sms'] = null !== $this->sms ? $this->sms->toMap() : null;
        }
        if (null !== $this->upAfterData) {
            $res['upAfterData'] = $this->upAfterData;
        }
        if (null !== $this->upBeforeData) {
            $res['upBeforeData'] = $this->upBeforeData;
        }
        if (null !== $this->voice) {
            $res['voice'] = null !== $this->voice ? $this->voice->toMap() : null;
        }
        if (null !== $this->webhook) {
            $res['webhook'] = null !== $this->webhook ? $this->webhook->toMap() : null;
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
        if (isset($map['deAfterData'])) {
            $model->deAfterData = $map['deAfterData'];
        }
        if (isset($map['deBeforeData'])) {
            $model->deBeforeData = $map['deBeforeData'];
        }
        if (isset($map['mail'])) {
            $model->mail = mail::fromMap($map['mail']);
        }
        if (isset($map['problem'])) {
            $model->problem = problem::fromMap($map['problem']);
        }
        if (isset($map['sms'])) {
            $model->sms = sms::fromMap($map['sms']);
        }
        if (isset($map['upAfterData'])) {
            $model->upAfterData = $map['upAfterData'];
        }
        if (isset($map['upBeforeData'])) {
            $model->upBeforeData = $map['upBeforeData'];
        }
        if (isset($map['voice'])) {
            $model->voice = voice::fromMap($map['voice']);
        }
        if (isset($map['webhook'])) {
            $model->webhook = webhook::fromMap($map['webhook']);
        }

        return $model;
    }
}
