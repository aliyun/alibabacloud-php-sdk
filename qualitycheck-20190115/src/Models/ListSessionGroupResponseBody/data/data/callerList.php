<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data\data;

use AlibabaCloud\Tea\Model;

class callerList extends Model
{
    /**
     * @var string[]
     */
    public $callerList;
    protected $_name = [
        'callerList' => 'CallerList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callerList) {
            $res['CallerList'] = $this->callerList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return callerList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallerList'])) {
            if (!empty($map['CallerList'])) {
                $model->callerList = $map['CallerList'];
            }
        }

        return $model;
    }
}
