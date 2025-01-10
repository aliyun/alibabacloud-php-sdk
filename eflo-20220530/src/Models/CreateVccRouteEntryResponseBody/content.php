<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\CreateVccRouteEntryResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description The ID of the route entry.
     *
     * @example vcc-rte-5cey1sap
     *
     * @var string
     */
    public $vccRouteEntryId;
    protected $_name = [
        'vccRouteEntryId' => 'VccRouteEntryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vccRouteEntryId) {
            $res['VccRouteEntryId'] = $this->vccRouteEntryId;
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
        if (isset($map['VccRouteEntryId'])) {
            $model->vccRouteEntryId = $map['VccRouteEntryId'];
        }

        return $model;
    }
}
