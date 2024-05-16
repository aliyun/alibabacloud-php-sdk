<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DeleteDIJobRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 11126
     *
     * @var int
     */
    public $DIJobId;
    protected $_name = [
        'DIJobId' => 'DIJobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DIJobId) {
            $res['DIJobId'] = $this->DIJobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDIJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DIJobId'])) {
            $model->DIJobId = $map['DIJobId'];
        }

        return $model;
    }
}
