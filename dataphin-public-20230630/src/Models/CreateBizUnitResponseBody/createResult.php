<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateBizUnitResponseBody;

use AlibabaCloud\Tea\Model;

class createResult extends Model
{
    /**
     * @example 545844456
     *
     * @var int
     */
    public $bizUnitId;
    protected $_name = [
        'bizUnitId' => 'BizUnitId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizUnitId) {
            $res['BizUnitId'] = $this->bizUnitId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return createResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizUnitId'])) {
            $model->bizUnitId = $map['BizUnitId'];
        }

        return $model;
    }
}
