<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\Chart;

use AlibabaCloud\Tea\Model;

class search extends Model
{
    /**
     * @description 结束时间
     *
     * @var string
     */
    public $end;

    /**
     * @description logstore 名称
     *
     * @var string
     */
    public $logstore;

    /**
     * @description 查询语句
     *
     * @var string
     */
    public $query;

    /**
     * @description 开始时间
     *
     * @var string
     */
    public $start;

    /**
     * @description topic
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'end'      => 'end',
        'logstore' => 'logstore',
        'query'    => 'query',
        'start'    => 'start',
        'topic'    => 'topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->end) {
            $res['end'] = $this->end;
        }
        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
        }
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }
        if (null !== $this->start) {
            $res['start'] = $this->start;
        }
        if (null !== $this->topic) {
            $res['topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return search
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['end'])) {
            $model->end = $map['end'];
        }
        if (isset($map['logstore'])) {
            $model->logstore = $map['logstore'];
        }
        if (isset($map['query'])) {
            $model->query = $map['query'];
        }
        if (isset($map['start'])) {
            $model->start = $map['start'];
        }
        if (isset($map['topic'])) {
            $model->topic = $map['topic'];
        }

        return $model;
    }
}
