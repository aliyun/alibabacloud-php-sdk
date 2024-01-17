<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models;

use AlibabaCloud\Tea\Model;

class RemoveAllBlackListRequest extends Model
{
    /**
     * @var string
     */
    public $blackType;
    protected $_name = [
        'blackType' => 'BlackType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blackType) {
            $res['BlackType'] = $this->blackType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveAllBlackListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlackType'])) {
            $model->blackType = $map['BlackType'];
        }

        return $model;
    }
}
