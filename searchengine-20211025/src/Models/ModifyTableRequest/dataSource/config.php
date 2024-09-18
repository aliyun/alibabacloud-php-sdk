<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyTableRequest\dataSource;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @description The AccessKey ID of the MaxCompute data source.
     *
     * @example AK
     *
     * @var string
     */
    public $accessKey;

    /**
     * @description The AccessKey secret of the MaxCompute data source.
     *
     * @example AS
     *
     * @var string
     */
    public $accessSecret;

    /**
     * @description The name of the OSS bucket.
     *
     * @example antsys-shujiang-osstest
     *
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $catalog;

    /**
     * @var string
     */
    public $database;

    /**
     * @description The endpoint of the MaxCompute data source.
     *
     * @example http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The path of the Object Storage Service (OSS) object.
     *
     * @example oss://opensearch
     *
     * @var string
     */
    public $ossPath;

    /**
     * @description The partition in the MaxCompute table.
     *
     * @example ds=20231220
     *
     * @var string
     */
    public $partition;

    /**
     * @description The name of the MaxCompute project that is used as the data source.
     *
     * @example yw_dw_rpt
     *
     * @var string
     */
    public $project;

    /**
     * @description The name of the MaxCompute table that is used as the data source.
     *
     * @example behavior
     *
     * @var string
     */
    public $table;

    /**
     * @var string
     */
    public $tag;
    protected $_name = [
        'accessKey'    => 'accessKey',
        'accessSecret' => 'accessSecret',
        'bucket'       => 'bucket',
        'catalog'      => 'catalog',
        'database'     => 'database',
        'endpoint'     => 'endpoint',
        'ossPath'      => 'ossPath',
        'partition'    => 'partition',
        'project'      => 'project',
        'table'        => 'table',
        'tag'          => 'tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['accessKey'] = $this->accessKey;
        }
        if (null !== $this->accessSecret) {
            $res['accessSecret'] = $this->accessSecret;
        }
        if (null !== $this->bucket) {
            $res['bucket'] = $this->bucket;
        }
        if (null !== $this->catalog) {
            $res['catalog'] = $this->catalog;
        }
        if (null !== $this->database) {
            $res['database'] = $this->database;
        }
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->ossPath) {
            $res['ossPath'] = $this->ossPath;
        }
        if (null !== $this->partition) {
            $res['partition'] = $this->partition;
        }
        if (null !== $this->project) {
            $res['project'] = $this->project;
        }
        if (null !== $this->table) {
            $res['table'] = $this->table;
        }
        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessKey'])) {
            $model->accessKey = $map['accessKey'];
        }
        if (isset($map['accessSecret'])) {
            $model->accessSecret = $map['accessSecret'];
        }
        if (isset($map['bucket'])) {
            $model->bucket = $map['bucket'];
        }
        if (isset($map['catalog'])) {
            $model->catalog = $map['catalog'];
        }
        if (isset($map['database'])) {
            $model->database = $map['database'];
        }
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['ossPath'])) {
            $model->ossPath = $map['ossPath'];
        }
        if (isset($map['partition'])) {
            $model->partition = $map['partition'];
        }
        if (isset($map['project'])) {
            $model->project = $map['project'];
        }
        if (isset($map['table'])) {
            $model->table = $map['table'];
        }
        if (isset($map['tag'])) {
            $model->tag = $map['tag'];
        }

        return $model;
    }
}
