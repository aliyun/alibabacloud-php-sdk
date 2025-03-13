<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryIndividuationTextTaskResponseBody;

use AlibabaCloud\Tea\Model;

class textList extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example 2761
     *
     * @var string
     */
    public $textId;

    /**
     * @example 11
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'status' => 'status',
        'textId' => 'textId',
        'userId' => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->textId) {
            $res['textId'] = $this->textId;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return textList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['textId'])) {
            $model->textId = $map['textId'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
