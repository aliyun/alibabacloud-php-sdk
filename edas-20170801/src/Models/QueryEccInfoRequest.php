<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class QueryEccInfoRequest extends Model
{
    /**
     * @description The ID of the ECC.
     *
     * @example b197-40ab-9155-****
     *
     * @var string
     */
    public $eccId;
    protected $_name = [
        'eccId' => 'EccId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eccId) {
            $res['EccId'] = $this->eccId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryEccInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EccId'])) {
            $model->eccId = $map['EccId'];
        }

        return $model;
    }
}
