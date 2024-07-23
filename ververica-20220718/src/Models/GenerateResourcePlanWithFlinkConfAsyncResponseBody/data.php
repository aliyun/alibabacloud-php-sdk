<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models\GenerateResourcePlanWithFlinkConfAsyncResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the ticket for you to query the asynchronous generation result.
     *
     * @example b3dcdb25-bf36-457d-92ba-a36077e8****
     *
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
