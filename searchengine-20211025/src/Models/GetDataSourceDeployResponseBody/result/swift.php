<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceDeployResponseBody\result;

use AlibabaCloud\Dara\Model;

class swift extends Model
{
    /**
     * @var string
     */
    public $topic;

    /**
     * @var string
     */
    public $zk;
    protected $_name = [
        'topic' => 'topic',
        'zk' => 'zk',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
