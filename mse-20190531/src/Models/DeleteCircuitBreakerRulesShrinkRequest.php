<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class DeleteCircuitBreakerRulesShrinkRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @example spring-cloud-a
     *
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $idsShrink;

    /**
     * @example default
     *
     * @var string
     */
    public $namespace;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'appName'        => 'AppName',
        'idsShrink'      => 'Ids',
        'namespace'      => 'Namespace',
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
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->idsShrink) {
            $res['Ids'] = $this->idsShrink;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCircuitBreakerRulesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Ids'])) {
            $model->idsShrink = $map['Ids'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}
