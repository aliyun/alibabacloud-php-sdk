<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class DeleteSlbAPRequest extends Model
{
    /**
     * @var int
     */
    public $slbAPId;
    protected $_name = [
        'slbAPId' => 'SlbAPId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->slbAPId) {
            $res['SlbAPId'] = $this->slbAPId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSlbAPRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SlbAPId'])) {
            $model->slbAPId = $map['SlbAPId'];
        }

        return $model;
    }
}
