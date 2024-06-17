<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyIndexRequest\dataSourceInfo;
use AlibabaCloud\Tea\Model;

class ModifyIndexRequest extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $buildParallelNum;

    /**
     * @var mixed[][]
     */
    public $cluster;

    /**
     * @example ha-cn-35t3r02iq03@ha-cn-35t3r02iq03_test_api@hz_pre_vpc_domain_1@test_api@index_config_v1
     *
     * @var string
     */
    public $clusterConfigName;

    /**
     * @var ConfigValue[]
     */
    public $config;

    /**
     * @example {\\"summarys\\":{\\"summary_fields\\":[\\"id\\"]},\\"indexs\\":[{\\"index_name\\":\\"index_id\\",\\"index_type\\":\\"PRIMARYKEY64\\",\\"index_fields\\":\\"id\\",\\"has_primary_key_attribute\\":true,\\"is_primary_key_sorted\\":false}],\\"attributes\\":[\\"id\\"],\\"fields\\":[{\\"field_name\\":\\"id\\",\\"field_type\\":\\"UINT16\\"}],\\"table_name\\":\\"index_2\\"}
     *
     * @var string
     */
    public $content;

    /**
     * @example ha-cn-35t3n1yuj0d_index_1
     *
     * @var string
     */
    public $dataSource;

    /**
     * @var dataSourceInfo
     */
    public $dataSourceInfo;

    /**
     * @var string
     */
    public $description;

    /**
     * @example vpc_hz_domain_1
     *
     * @var string
     */
    public $domain;

    /**
     * @example 2
     *
     * @var int
     */
    public $mergeParallelNum;

    /**
     * @example 2
     *
     * @var int
     */
    public $partition;

    /**
     * @example PUSH_ONLY
     *
     * @var string
     */
    public $pushMode;

    /**
     * @example true
     *
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'buildParallelNum'  => 'buildParallelNum',
        'cluster'           => 'cluster',
        'clusterConfigName' => 'clusterConfigName',
        'config'            => 'config',
        'content'           => 'content',
        'dataSource'        => 'dataSource',
        'dataSourceInfo'    => 'dataSourceInfo',
        'description'       => 'description',
        'domain'            => 'domain',
        'mergeParallelNum'  => 'mergeParallelNum',
        'partition'         => 'partition',
        'pushMode'          => 'pushMode',
        'dryRun'            => 'dryRun',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildParallelNum) {
            $res['buildParallelNum'] = $this->buildParallelNum;
        }
        if (null !== $this->cluster) {
            $res['cluster'] = $this->cluster;
        }
        if (null !== $this->clusterConfigName) {
            $res['clusterConfigName'] = $this->clusterConfigName;
        }
        if (null !== $this->config) {
            $res['config'] = [];
            if (null !== $this->config && \is_array($this->config)) {
                foreach ($this->config as $key => $val) {
                    $res['config'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->dataSource) {
            $res['dataSource'] = $this->dataSource;
        }
        if (null !== $this->dataSourceInfo) {
            $res['dataSourceInfo'] = null !== $this->dataSourceInfo ? $this->dataSourceInfo->toMap() : null;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }
        if (null !== $this->mergeParallelNum) {
            $res['mergeParallelNum'] = $this->mergeParallelNum;
        }
        if (null !== $this->partition) {
            $res['partition'] = $this->partition;
        }
        if (null !== $this->pushMode) {
            $res['pushMode'] = $this->pushMode;
        }
        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyIndexRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['buildParallelNum'])) {
            $model->buildParallelNum = $map['buildParallelNum'];
        }
        if (isset($map['cluster'])) {
            $model->cluster = $map['cluster'];
        }
        if (isset($map['clusterConfigName'])) {
            $model->clusterConfigName = $map['clusterConfigName'];
        }
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['dataSource'])) {
            $model->dataSource = $map['dataSource'];
        }
        if (isset($map['dataSourceInfo'])) {
            $model->dataSourceInfo = dataSourceInfo::fromMap($map['dataSourceInfo']);
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }
        if (isset($map['mergeParallelNum'])) {
            $model->mergeParallelNum = $map['mergeParallelNum'];
        }
        if (isset($map['partition'])) {
            $model->partition = $map['partition'];
        }
        if (isset($map['pushMode'])) {
            $model->pushMode = $map['pushMode'];
        }
        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        return $model;
    }
}
