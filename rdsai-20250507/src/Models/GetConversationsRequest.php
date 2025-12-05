<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class GetConversationsRequest extends Model
{
    /**
     * @var string
     */
    public $lastId;

    /**
     * @var string
     */
    public $limit;

    /**
     * @var string
     */
    public $pinned;

    /**
     * @var string
     */
    public $sortBy;
    protected $_name = [
        'lastId' => 'LastId',
        'limit' => 'Limit',
        'pinned' => 'Pinned',
        'sortBy' => 'SortBy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lastId) {
            $res['LastId'] = $this->lastId;
        }

        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->pinned) {
            $res['Pinned'] = $this->pinned;
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
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
        if (isset($map['LastId'])) {
            $model->lastId = $map['LastId'];
        }

        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['Pinned'])) {
            $model->pinned = $map['Pinned'];
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        return $model;
    }
}
