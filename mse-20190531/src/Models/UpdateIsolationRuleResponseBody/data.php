<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\UpdateIsolationRuleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example hkhon1po62@c3df23522bXXXXX
     *
     * @var string
     */
    public $appId;

    /**
     * @example spring-cloud-a
     *
     * @var string
     */
    public $appName;

    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $limitApp;

    /**
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @example /a
     *
     * @var string
     */
    public $resource;

    /**
     * @example 3
     *
     * @var float
     */
    public $threshold;
    protected $_name = [
        'appId'     => 'AppId',
        'appName'   => 'AppName',
        'enable'    => 'Enable',
        'id'        => 'Id',
        'limitApp'  => 'LimitApp',
        'namespace' => 'Namespace',
        'resource'  => 'Resource',
        'threshold' => 'Threshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->limitApp) {
            $res['LimitApp'] = $this->limitApp;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LimitApp'])) {
            $model->limitApp = $map['LimitApp'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
