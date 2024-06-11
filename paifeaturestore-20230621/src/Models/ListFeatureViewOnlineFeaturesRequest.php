<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Tea\Model;

class ListFeatureViewOnlineFeaturesRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $joinIds;
    protected $_name = [
        'joinIds' => 'JoinIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->joinIds) {
            $res['JoinIds'] = $this->joinIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFeatureViewOnlineFeaturesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JoinIds'])) {
            if (!empty($map['JoinIds'])) {
                $model->joinIds = $map['JoinIds'];
            }
        }

        return $model;
    }
}
