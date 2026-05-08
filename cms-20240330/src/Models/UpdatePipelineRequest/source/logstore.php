<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\UpdatePipelineRequest\source;

use AlibabaCloud\Dara\Model;

class logstore extends Model
{
    /**
     * @var string
     */
    public $logstore;

    /**
     * @var string
     */
    public $query;
    protected $_name = [
        'logstore' => 'logstore',
        'query' => 'query',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
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
        if (isset($map['logstore'])) {
            $model->logstore = $map['logstore'];
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        return $model;
    }
}
