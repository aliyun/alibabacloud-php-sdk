<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Tea\Model;

class UploadPcaCertToCasRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 59425,59426
     *
     * @var string
     */
    public $ids;
    protected $_name = [
        'ids' => 'Ids',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadPcaCertToCasRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ids'])) {
            $model->ids = $map['Ids'];
        }

        return $model;
    }
}
