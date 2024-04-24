<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class CloneSentinelRuleFromAhasRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @example default
     *
     * @var string
     */
    public $ahasNamespace;

    /**
     * @example spring-cloud-a
     *
     * @var string
     */
    public $appName;

    /**
     * @example false
     *
     * @var bool
     */
    public $isAHASPublicRegion;

    /**
     * @example default
     *
     * @var string
     */
    public $namespace;
    protected $_name = [
        'acceptLanguage'     => 'AcceptLanguage',
        'ahasNamespace'      => 'AhasNamespace',
        'appName'            => 'AppName',
        'isAHASPublicRegion' => 'IsAHASPublicRegion',
        'namespace'          => 'Namespace',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloneSentinelRuleFromAhasRequest
     */
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
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}
