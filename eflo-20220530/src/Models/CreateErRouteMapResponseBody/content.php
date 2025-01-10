<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\CreateErRouteMapResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description routing policy ID
     *
     * @example er-rmap-uwglhzom
     *
     * @var string
     */
    public $erRouteMapId;
    protected $_name = [
        'erRouteMapId' => 'ErRouteMapId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->erRouteMapId) {
            $res['ErRouteMapId'] = $this->erRouteMapId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErRouteMapId'])) {
            $model->erRouteMapId = $map['ErRouteMapId'];
        }

        return $model;
    }
}
