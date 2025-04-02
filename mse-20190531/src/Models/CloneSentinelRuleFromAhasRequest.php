<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class CloneSentinelRuleFromAhasRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $ahasNamespace;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var bool
     */
    public $isAHASPublicRegion;

    /**
     * @var string
     */
    public $mseAppName;

    /**
     * @var string
     */
    public $namespace;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'ahasNamespace' => 'AhasNamespace',
        'appName' => 'AppName',
        'isAHASPublicRegion' => 'IsAHASPublicRegion',
        'mseAppName' => 'MseAppName',
        'namespace' => 'Namespace',
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

        if (null !== $this->ahasNamespace) {
            $res['AhasNamespace'] = $this->ahasNamespace;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->isAHASPublicRegion) {
            $res['IsAHASPublicRegion'] = $this->isAHASPublicRegion;
        }

        if (null !== $this->mseAppName) {
            $res['MseAppName'] = $this->mseAppName;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
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

        if (isset($map['AhasNamespace'])) {
            $model->ahasNamespace = $map['AhasNamespace'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['IsAHASPublicRegion'])) {
            $model->isAHASPublicRegion = $map['IsAHASPublicRegion'];
        }

        if (isset($map['MseAppName'])) {
            $model->mseAppName = $map['MseAppName'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}
