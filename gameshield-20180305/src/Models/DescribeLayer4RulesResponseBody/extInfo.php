<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeLayer4RulesResponseBody;

use AlibabaCloud\Tea\Model;

class extInfo extends Model
{
    /**
     * @var int
     */
    public $useCc;

    /**
     * @var int
     */
    public $ngRouteEnable;
    protected $_name = [
        'useCc'         => 'UseCc',
        'ngRouteEnable' => 'NgRouteEnable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->useCc) {
            $res['UseCc'] = $this->useCc;
        }
        if (null !== $this->ngRouteEnable) {
            $res['NgRouteEnable'] = $this->ngRouteEnable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UseCc'])) {
            $model->useCc = $map['UseCc'];
        }
        if (isset($map['NgRouteEnable'])) {
            $model->ngRouteEnable = $map['NgRouteEnable'];
        }

        return $model;
    }
}
