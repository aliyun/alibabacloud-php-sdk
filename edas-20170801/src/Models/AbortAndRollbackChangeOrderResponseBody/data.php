<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\AbortAndRollbackChangeOrderResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the change process.
     *
     * @example 4f40e616-cdcd-4250-a018-efd459******
     *
     * @var string
     */
    public $changeOrderId;
    protected $_name = [
        'changeOrderId' => 'ChangeOrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeOrderId) {
            $res['ChangeOrderId'] = $this->changeOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeOrderId'])) {
            $model->changeOrderId = $map['ChangeOrderId'];
        }

        return $model;
    }
}
