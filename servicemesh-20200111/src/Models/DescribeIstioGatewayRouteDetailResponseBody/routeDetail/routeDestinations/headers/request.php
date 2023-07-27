<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\routeDestinations\headers;

use AlibabaCloud\Tea\Model;

class request extends Model
{
    /**
     * @description The values to be added to the header key.
     *
     * @example key
     *
     * @var mixed[]
     */
    public $add;

    /**
     * @description The header value to be deleted.
     *
     * @var string[]
     */
    public $remove;

    /**
     * @description The header key to be used to overwrite the original header key.
     *
     * @var string[]
     */
    public $set;
    protected $_name = [
        'add'    => 'Add',
        'remove' => 'Remove',
        'set'    => 'Set',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->add) {
            $res['Add'] = $this->add;
        }
        if (null !== $this->remove) {
            $res['Remove'] = $this->remove;
        }
        if (null !== $this->set) {
            $res['Set'] = $this->set;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Add'])) {
            $model->add = $map['Add'];
        }
        if (isset($map['Remove'])) {
            if (!empty($map['Remove'])) {
                $model->remove = $map['Remove'];
            }
        }
        if (isset($map['Set'])) {
            $model->set = $map['Set'];
        }

        return $model;
    }
}
