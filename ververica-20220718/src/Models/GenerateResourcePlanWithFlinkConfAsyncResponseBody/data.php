<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models\GenerateResourcePlanWithFlinkConfAsyncResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $ticketId;
    protected $_name = [
        'ticketId' => 'ticketId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ticketId) {
            $res['ticketId'] = $this->ticketId;
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
        if (isset($map['ticketId'])) {
            $model->ticketId = $map['ticketId'];
        }

        return $model;
    }
}
