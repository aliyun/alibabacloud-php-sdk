<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\QuerySlsLogStoreListResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The type of the logging service.
     *
     * @example Log Service
     *
     * @var string
     */
    public $consumerSide;

    /**
     * @description The time when the logging service was created.
     *
     * @example 2020-05-18 22:08:46
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The URL of the logging service.
     *
     * @example https://sls.console.aliyun.com/lognext/project/k8s-log-c846f28edbd1d4c6aa9d78c0e********\/logsearch/thisisiss
     *
     * @var string
     */
    public $link;

    /**
     * @description The name of the Logstore.
     *
     * @example thisisatestlogstore
     *
     * @var string
     */
    public $logstore;

    /**
     * @description The name of the project.
     *
     * @example k8s-log-c846f28edbd1d4c6aa9d78c0e********
     *
     * @var string
     */
    public $project;

    /**
     * @description The source of logs. Valid values:
     *
     *   Standard output: stdout.log
     *   File log: the directory that stores logs
     *
     * @example /var/log/*
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'consumerSide' => 'ConsumerSide',
        'createTime'   => 'CreateTime',
        'link'         => 'Link',
        'logstore'     => 'Logstore',
        'project'      => 'Project',
        'source'       => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerSide) {
            $res['ConsumerSide'] = $this->consumerSide;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->link) {
            $res['Link'] = $this->link;
        }
        if (null !== $this->logstore) {
            $res['Logstore'] = $this->logstore;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumerSide'])) {
            $model->consumerSide = $map['ConsumerSide'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Link'])) {
            $model->link = $map['Link'];
        }
        if (isset($map['Logstore'])) {
            $model->logstore = $map['Logstore'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
