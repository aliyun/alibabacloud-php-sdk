<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\EntityDiscoverRule;

use AlibabaCloud\Tea\Model;

class ipMatchRule extends Model
{
    /**
     * @var string
     */
    public $ipCIDR;

    /**
     * @var string
     */
    public $ipFieldKey;
    protected $_name = [
        'ipCIDR' => 'ipCIDR',
        'ipFieldKey' => 'ipFieldKey',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipCIDR) {
            $res['ipCIDR'] = $this->ipCIDR;
        }
        if (null !== $this->ipFieldKey) {
            $res['ipFieldKey'] = $this->ipFieldKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipMatchRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ipCIDR'])) {
            $model->ipCIDR = $map['ipCIDR'];
        }
        if (isset($map['ipFieldKey'])) {
            $model->ipFieldKey = $map['ipFieldKey'];
        }

        return $model;
    }
}
