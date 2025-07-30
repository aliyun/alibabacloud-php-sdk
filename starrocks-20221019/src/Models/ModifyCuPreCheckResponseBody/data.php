<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyCuPreCheckResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the number of CUs can be modified.
     *
     * @example false
     *
     * @var bool
     */
    public $allow;

    /**
     * @description The reason why the number of CUs cannot be modified.
     *
     * @example Failed to find node group[ng-3d5ce6454354****].
     *
     * @var string
     */
    public $reason;
    protected $_name = [
        'allow' => 'Allow',
        'reason' => 'Reason',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->allow) {
            $res['Allow'] = $this->allow;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
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
        if (isset($map['Allow'])) {
            $model->allow = $map['Allow'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
