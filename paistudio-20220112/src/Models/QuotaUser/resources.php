<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\QuotaUser;

use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ResourceAmount;
use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @var ResourceAmount
     */
    public $submitted;

    /**
     * @var ResourceAmount
     */
    public $used;
    protected $_name = [
        'submitted' => 'Submitted',
        'used' => 'Used',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->submitted) {
            $res['Submitted'] = null !== $this->submitted ? $this->submitted->toMap() : null;
        }
        if (null !== $this->used) {
            $res['Used'] = null !== $this->used ? $this->used->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Submitted'])) {
            $model->submitted = ResourceAmount::fromMap($map['Submitted']);
        }
        if (isset($map['Used'])) {
            $model->used = ResourceAmount::fromMap($map['Used']);
        }

        return $model;
    }
}
