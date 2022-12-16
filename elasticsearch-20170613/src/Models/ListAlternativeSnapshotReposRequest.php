<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListAlternativeSnapshotReposRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $alreadySetItems;
    protected $_name = [
        'alreadySetItems' => 'alreadySetItems',
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

        return $model;
    }
}
