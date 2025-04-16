<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class enhancedNetwork extends Model
{
    /**
     * @var bool
     */
    public $enableRss;

    /**
     * @var bool
     */
    public $enableSriov;
    protected $_name = [
        'enableRss' => 'EnableRss',
        'enableSriov' => 'EnableSriov',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
