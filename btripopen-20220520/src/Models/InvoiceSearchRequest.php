<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class InvoiceSearchRequest extends Model
{
    /**
     * @var string
     */
    public $thirdPartId;

    /**
     * @var string
     */
    public $title;

    /**
     * @example 12345
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'thirdPartId' => 'third_part_id',
        'title'       => 'title',
        'userId'      => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->thirdPartId) {
            $res['third_part_id'] = $this->thirdPartId;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InvoiceSearchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['third_part_id'])) {
            $model->thirdPartId = $map['third_part_id'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
