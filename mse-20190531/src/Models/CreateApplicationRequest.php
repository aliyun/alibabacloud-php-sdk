<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class CreateApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;
    /**
     * @var string
     */
    public $appName;
    /**
     * @var string
     */
    public $language;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var string
     */
    public $region;
    /**
     * @var string
     */
    public $sentinelEnable;
    /**
     * @var string
     */
    public $source;
    /**
     * @var string
     */
    public $switchEnable;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'appName'        => 'AppName',
        'language'       => 'Language',
        'namespace'      => 'Namespace',
        'region'         => 'Region',
        'sentinelEnable' => 'SentinelEnable',
        'source'         => 'Source',
        'switchEnable'   => 'SwitchEnable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->sentinelEnable) {
            $res['SentinelEnable'] = $this->sentinelEnable;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->switchEnable) {
            $res['SwitchEnable'] = $this->switchEnable;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['SentinelEnable'])) {
            $model->sentinelEnable = $map['SentinelEnable'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['SwitchEnable'])) {
            $model->switchEnable = $map['SwitchEnable'];
        }

        return $model;
    }
}
