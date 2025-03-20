<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class ListCiphersRequest extends Model
{
    /**
     * @description The name of the cipher suite group, which can be: all, strict, custom.
     *
     * This parameter is required.
     *
     * @example strict
     *
     * @var string
     */
    public $ciphersGroup;
    protected $_name = [
        'ciphersGroup' => 'CiphersGroup',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ciphersGroup) {
            $res['CiphersGroup'] = $this->ciphersGroup;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCiphersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CiphersGroup'])) {
            $model->ciphersGroup = $map['CiphersGroup'];
        }

        return $model;
    }
}
