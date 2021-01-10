<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddLiveStreamTranscodeRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $app;

    /**
     * @var string
     */
    public $template;

    /**
     * @var string
     */
    public $encryptParameters;

    /**
     * @var string
     */
    public $lazy;

    /**
     * @var string
     */
    public $watermark;

    /**
     * @var string
     */
    public $mix;

    /**
     * @var string
     */
    public $onlyAudio;

    /**
     * @var string
     */
    public $waterPattern;
    protected $_name = [
        'ownerId'           => 'OwnerId',
        'domain'            => 'Domain',
        'app'               => 'App',
        'template'          => 'Template',
        'encryptParameters' => 'EncryptParameters',
        'lazy'              => 'Lazy',
        'watermark'         => 'Watermark',
        'mix'               => 'Mix',
        'onlyAudio'         => 'OnlyAudio',
        'waterPattern'      => 'WaterPattern',
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
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }
        if (null !== $this->encryptParameters) {
            $res['EncryptParameters'] = $this->encryptParameters;
        }
        if (null !== $this->lazy) {
            $res['Lazy'] = $this->lazy;
        }
        if (null !== $this->watermark) {
            $res['Watermark'] = $this->watermark;
        }
        if (null !== $this->mix) {
            $res['Mix'] = $this->mix;
        }
        if (null !== $this->onlyAudio) {
            $res['OnlyAudio'] = $this->onlyAudio;
        }
        if (null !== $this->waterPattern) {
            $res['WaterPattern'] = $this->waterPattern;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddLiveStreamTranscodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }
        if (isset($map['EncryptParameters'])) {
            $model->encryptParameters = $map['EncryptParameters'];
        }
        if (isset($map['Lazy'])) {
            $model->lazy = $map['Lazy'];
        }
        if (isset($map['Watermark'])) {
            $model->watermark = $map['Watermark'];
        }
        if (isset($map['Mix'])) {
            $model->mix = $map['Mix'];
        }
        if (isset($map['OnlyAudio'])) {
            $model->onlyAudio = $map['OnlyAudio'];
        }
        if (isset($map['WaterPattern'])) {
            $model->waterPattern = $map['WaterPattern'];
        }

        return $model;
    }
}
