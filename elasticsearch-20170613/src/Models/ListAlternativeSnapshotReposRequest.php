<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListAlternativeSnapshotReposRequest extends Model
{
    /**
     * @var bool
     */
    public $alreadySetItems;

    /**
     * @var string
     */
    public $body;
    protected $_name = [
        'alreadySetItems' => 'alreadySetItems',
        'body'            => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alreadySetItems) {
            $res['alreadySetItems'] = $this->alreadySetItems;
        }
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAlternativeSnapshotReposRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alreadySetItems'])) {
            $model->alreadySetItems = $map['alreadySetItems'];
        }
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        return $model;
    }
}
