<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddTrancodeSEIRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $pattern;

    /**
     * @var int
     */
    public $repeat;

    /**
     * @var int
     */
    public $delay;
    protected $_name = [
        'ownerId'    => 'OwnerId',
        'domainName' => 'DomainName',
        'appName'    => 'AppName',
        'streamName' => 'StreamName',
        'text'       => 'Text',
        'pattern'    => 'Pattern',
        'repeat'     => 'Repeat',
        'delay'      => 'Delay',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->pattern) {
            $res['Pattern'] = $this->pattern;
        }
        if (null !== $this->repeat) {
            $res['Repeat'] = $this->repeat;
        }
        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddTrancodeSEIRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Pattern'])) {
            $model->pattern = $map['Pattern'];
        }
        if (isset($map['Repeat'])) {
            $model->repeat = $map['Repeat'];
        }
        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }

        return $model;
    }
}
