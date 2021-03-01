<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DeleteEcuRequest extends Model
{
    /**
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
