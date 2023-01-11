<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ChatappBindWabaResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example C02029392939939
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description wabaId
     *
     * @example 2939828282
     *
     * @var string
     */
    public $wabaId;
    protected $_name = [
        'custSpaceId' => 'CustSpaceId',
        'wabaId'      => 'WabaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->wabaId) {
            $res['WabaId'] = $this->wabaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['WabaId'])) {
            $model->wabaId = $map['WabaId'];
        }

        return $model;
    }
}
