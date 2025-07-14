<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class GetDataSourceConnectionInfoRequest extends Model
{
    /**
     * @description Data source ID.
     *
     * This parameter is required.
     *
     * @example 7AAB95D-*****-****-*4FC0C976
     *
     * @var string
     */
    public $dsId;
    protected $_name = [
        'dsId' => 'DsId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dsId) {
            $res['DsId'] = $this->dsId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDataSourceConnectionInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DsId'])) {
            $model->dsId = $map['DsId'];
        }

        return $model;
    }
}
