<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyDataSourceDeployRequest;

use AlibabaCloud\Tea\Model;

class swift extends Model
{
    /**
     * @description topic
     *
     * @example ha-cn-0ju2rps6c08_api
     *
     * @var string
     */
    public $topic;

    /**
     * @description zk
     *
     * @example zk
     *
     * @var string
     */
    public $zk;
    protected $_name = [
        'topic' => 'topic',
        'zk'    => 'zk',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->topic) {
            $res['topic'] = $this->topic;
        }
        if (null !== $this->zk) {
            $res['zk'] = $this->zk;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return swift
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['topic'])) {
            $model->topic = $map['topic'];
        }
        if (isset($map['zk'])) {
            $model->zk = $map['zk'];
        }

        return $model;
    }
}
