<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBizUnitInfoResponseBody\bizUnitInfo;

use AlibabaCloud\Tea\Model;

class businessLeaderList extends Model
{
    /**
     * @example 20001201
     *
     * @var string
     */
    public $id;
    protected $_name = [
        'id' => 'Id',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return businessLeaderList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
