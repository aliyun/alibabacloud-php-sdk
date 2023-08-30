<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class RemoveApplicationRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @example abcde@12345
     *
     * @var string
     */
    public $appId;

    /**
     * @example example-app
     *
     * @var string
     */
    public $appName;

    /**
     * @example prod
     *
     * @var string
     */
    public $namespace;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'appId'          => 'AppId',
        'appName'        => 'AppName',
        'namespace'      => 'Namespace',
        'region'         => 'Region',
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
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
