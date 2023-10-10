<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DeleteEcuRequest extends Model
{
    /**
     * @description The unique ID of the ECU to be deleted.
     *
     * @example 5c0b8c82-4ba9-****-****-130a34ffa534
     *
     * @var string
     */
    public $ecuId;
    protected $_name = [
        'ecuId' => 'EcuId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecuId) {
            $res['EcuId'] = $this->ecuId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEcuRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcuId'])) {
            $model->ecuId = $map['EcuId'];
        }

        return $model;
    }
}
