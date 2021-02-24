<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vedu_1_0\Models\BatchCreateResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string[]
     */
    public $corpIdCardIdMap;
    protected $_name = [
        'corpIdCardIdMap' => 'corpIdCardIdMap',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpIdCardIdMap) {
            $res['corpIdCardIdMap'] = $this->corpIdCardIdMap;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['corpIdCardIdMap'])) {
            $model->corpIdCardIdMap = $map['corpIdCardIdMap'];
        }

        return $model;
    }
}
