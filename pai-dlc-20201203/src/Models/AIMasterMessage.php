<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class AIMasterMessage extends Model
{
    /**
     * @var string
     */
    public $extended;

    /**
     * @var int
     */
    public $jobRestartCount;

    /**
     * @var string
     */
    public $messageContent;

    /**
     * @var string
     */
    public $messageEvent;

    /**
     * @var int
     */
    public $messageVersion;

    /**
     * @var string
     */
    public $restartType;
    protected $_name = [
        'extended'        => 'Extended',
        'jobRestartCount' => 'JobRestartCount',
        'messageContent'  => 'MessageContent',
        'messageEvent'    => 'MessageEvent',
        'messageVersion'  => 'MessageVersion',
        'restartType'     => 'RestartType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extended) {
            $res['Extended'] = $this->extended;
        }
        if (null !== $this->jobRestartCount) {
            $res['JobRestartCount'] = $this->jobRestartCount;
        }
        if (null !== $this->messageContent) {
            $res['MessageContent'] = $this->messageContent;
        }
        if (null !== $this->messageEvent) {
            $res['MessageEvent'] = $this->messageEvent;
        }
        if (null !== $this->messageVersion) {
            $res['MessageVersion'] = $this->messageVersion;
        }
        if (null !== $this->restartType) {
            $res['RestartType'] = $this->restartType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AIMasterMessage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Extended'])) {
            $model->extended = $map['Extended'];
        }
        if (isset($map['JobRestartCount'])) {
            $model->jobRestartCount = $map['JobRestartCount'];
        }
        if (isset($map['MessageContent'])) {
            $model->messageContent = $map['MessageContent'];
        }
        if (isset($map['MessageEvent'])) {
            $model->messageEvent = $map['MessageEvent'];
        }
        if (isset($map['MessageVersion'])) {
            $model->messageVersion = $map['MessageVersion'];
        }
        if (isset($map['RestartType'])) {
            $model->restartType = $map['RestartType'];
        }

        return $model;
    }
}
