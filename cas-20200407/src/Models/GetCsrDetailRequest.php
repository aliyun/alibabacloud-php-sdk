<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class GetCsrDetailRequest extends Model
{
    /**
     * @description CSR ID。
     *
     * @example 3924
     *
     * @var int
     */
    public $csrId;
    protected $_name = [
        'csrId' => 'CsrId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->csrId) {
            $res['CsrId'] = $this->csrId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCsrDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CsrId'])) {
            $model->csrId = $map['CsrId'];
        }

        return $model;
    }
}
