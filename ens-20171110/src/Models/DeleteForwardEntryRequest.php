<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeleteForwardEntryRequest extends Model
{
    /**
     * @description The ID of the DNAT entry that you want to delete.
     *
     * @example fwd-5tfk8qgepr9ijjkqxt8do****
     *
     * @var string
     */
    public $forwardEntryId;
    protected $_name = [
        'forwardEntryId' => 'ForwardEntryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forwardEntryId) {
            $res['ForwardEntryId'] = $this->forwardEntryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteForwardEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForwardEntryId'])) {
            $model->forwardEntryId = $map['ForwardEntryId'];
        }

        return $model;
    }
}
