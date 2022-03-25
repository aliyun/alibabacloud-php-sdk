<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceHistoryEventsRequest;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @var bool
     */
    public $desc;

    /**
     * @var string
     */
    public $sortField;
    protected $_name = [
        'desc'      => 'desc',
        'sortField' => 'sortField',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }
        if (null !== $this->sortField) {
            $res['sortField'] = $this->sortField;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }
        if (isset($map['sortField'])) {
            $model->sortField = $map['sortField'];
        }

        return $model;
    }
}
