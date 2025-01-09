<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyNetworkInterfaceAttributeRequest;

use AlibabaCloud\Tea\Model;

class enhancedNetwork extends Model
{
    /**
     * @var bool
     */
    public $enableRss;

    /**
     * @description This parameter is not publicly available.
     *
     * @example true
     *
     * @var bool
     */
    public $enableSriov;
    protected $_name = [
        'enableRss'   => 'EnableRss',
        'enableSriov' => 'EnableSriov',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableRss) {
            $res['EnableRss'] = $this->enableRss;
        }
        if (null !== $this->enableSriov) {
            $res['EnableSriov'] = $this->enableSriov;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return enhancedNetwork
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableRss'])) {
            $model->enableRss = $map['EnableRss'];
        }
        if (isset($map['EnableSriov'])) {
            $model->enableSriov = $map['EnableSriov'];
        }

        return $model;
    }
}
