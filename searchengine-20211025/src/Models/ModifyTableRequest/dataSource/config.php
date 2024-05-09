<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyTableRequest\dataSource;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @description AK
     *
     * @example AK
     *
     * @var string
     */
    public $accessKey;

    /**
     * @description AS
     *
     * @example AS
     *
     * @var string
     */
    public $accessSecret;

    /**
     * @description oss bucket
     *
     * @example antsys-shujiang-osstest
     *
     * @var string
     */
    public $bucket;

    /**
     * @example http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api
     *
     * @var string
     */
    public $endpoint;

    /**
     * @example oss://opensearch
     *
     * @var string
     */
    public $ossPath;

    /**
     * @example ds=20231220
     *
     * @var string
     */
    public $partition;

    /**
     * @example yw_dw_rpt
     *
     * @var string
     */
    public $project;

    /**
     * @example behavior
     *
     * @var string
     */
    public $table;
    protected $_name = [
        'accessKey'    => 'accessKey',
        'accessSecret' => 'accessSecret',
        'bucket'       => 'bucket',
        'endpoint'     => 'endpoint',
        'ossPath'      => 'ossPath',
        'partition'    => 'partition',
        'project'      => 'project',
        'table'        => 'table',
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

        return $model;
    }
}
