<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class GenerateAliyunCertUrlRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunPk;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $applyChannel;

    /**
     * @var string
     */
    public $applyType;

    /**
     * @var string
     */
    public $callback;

    /**
     * @var string
     */
    public $certWay;

    /**
     * @var bool
     */
    public $ignoreAlreadyCert;

    /**
     * @var bool
     */
    public $isMobile;

    /**
     * @var bool
     */
    public $isOpenApp;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $subjectType;
    protected $_name = [
        'aliyunPk' => 'AliyunPk',
        'appName' => 'AppName',
        'applyChannel' => 'ApplyChannel',
        'applyType' => 'ApplyType',
        'callback' => 'Callback',
        'certWay' => 'CertWay',
        'ignoreAlreadyCert' => 'IgnoreAlreadyCert',
        'isMobile' => 'IsMobile',
        'isOpenApp' => 'IsOpenApp',
        'platform' => 'Platform',
        'source' => 'Source',
        'subjectType' => 'SubjectType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunPk) {
            $res['AliyunPk'] = $this->aliyunPk;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->applyChannel) {
            $res['ApplyChannel'] = $this->applyChannel;
        }

        if (null !== $this->applyType) {
            $res['ApplyType'] = $this->applyType;
        }

        if (null !== $this->callback) {
            $res['Callback'] = $this->callback;
        }

        if (null !== $this->certWay) {
            $res['CertWay'] = $this->certWay;
        }

        if (null !== $this->ignoreAlreadyCert) {
            $res['IgnoreAlreadyCert'] = $this->ignoreAlreadyCert;
        }

        if (null !== $this->isMobile) {
            $res['IsMobile'] = $this->isMobile;
        }

        if (null !== $this->isOpenApp) {
            $res['IsOpenApp'] = $this->isOpenApp;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->subjectType) {
            $res['SubjectType'] = $this->subjectType;
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
        if (isset($map['AliyunPk'])) {
            $model->aliyunPk = $map['AliyunPk'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['ApplyChannel'])) {
            $model->applyChannel = $map['ApplyChannel'];
        }

        if (isset($map['ApplyType'])) {
            $model->applyType = $map['ApplyType'];
        }

        if (isset($map['Callback'])) {
            $model->callback = $map['Callback'];
        }

        if (isset($map['CertWay'])) {
            $model->certWay = $map['CertWay'];
        }

        if (isset($map['IgnoreAlreadyCert'])) {
            $model->ignoreAlreadyCert = $map['IgnoreAlreadyCert'];
        }

        if (isset($map['IsMobile'])) {
            $model->isMobile = $map['IsMobile'];
        }

        if (isset($map['IsOpenApp'])) {
            $model->isOpenApp = $map['IsOpenApp'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['SubjectType'])) {
            $model->subjectType = $map['SubjectType'];
        }

        return $model;
    }
}
