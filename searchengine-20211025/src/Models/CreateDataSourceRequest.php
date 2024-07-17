<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateDataSourceRequest\config;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateDataSourceRequest\saroConfig;
use AlibabaCloud\Tea\Model;

class CreateDataSourceRequest extends Model
{
    /**
     * @description Specifies whether to automatically rebuild the index.
     *
     * @example true
     *
     * @var bool
     */
    public $autoBuildIndex;

    /**
     * @description The configuration information.
     *
     * @var config
     */
    public $config;

    /**
     * @description The data center in which the data source is deployed.
     *
     * @example vpc_hz_domain_1
     *
     * @var string
     */
    public $domain;

    /**
     * @description The name of the data source.
     *
     * @example ha-cn-pl32rf0****_test_api
     *
     * @var string
     */
    public $name;

    /**
     * @description The configurations of the SARO data source.
     *
     * @var saroConfig
     */
    public $saroConfig;

    /**
     * @description The type of the data source. Valid values: odps, oss, and swift.
     *
     * @example odps
     *
     * @var string
     */
    public $type;

    /**
     * @description Specifies whether to perform a dry run. This parameter is only used to check whether the data source is valid. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'autoBuildIndex' => 'autoBuildIndex',
        'config'         => 'config',
        'domain'         => 'domain',
        'name'           => 'name',
        'saroConfig'     => 'saroConfig',
        'type'           => 'type',
        'dryRun'         => 'dryRun',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoBuildIndex) {
            $res['autoBuildIndex'] = $this->autoBuildIndex;
        }
        if (null !== $this->config) {
            $res['config'] = null !== $this->config ? $this->config->toMap() : null;
        }
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->saroConfig) {
            $res['saroConfig'] = null !== $this->saroConfig ? $this->saroConfig->toMap() : null;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['autoBuildIndex'])) {
            $model->autoBuildIndex = $map['autoBuildIndex'];
        }
        if (isset($map['config'])) {
            $model->config = config::fromMap($map['config']);
        }
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['saroConfig'])) {
            $model->saroConfig = saroConfig::fromMap($map['saroConfig']);
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        return $model;
    }
}
