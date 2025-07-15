<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetInstanceListResponseBody\instanceList\instanceVO;

use AlibabaCloud\Tea\Model;

class vSwitchIds extends Model
{
    /**
     * @var string[]
     */
    public $vSwitchIds;
    protected $_name = [
        'vSwitchIds' => 'VSwitchIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vSwitchIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = $map['VSwitchIds'];
            }
        }

        return $model;
    }
}
