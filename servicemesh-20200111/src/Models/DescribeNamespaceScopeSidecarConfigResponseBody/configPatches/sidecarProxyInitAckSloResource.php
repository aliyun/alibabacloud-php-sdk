<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches;

use AlibabaCloud\Tea\Model;

class sidecarProxyInitAckSloResource extends Model
{
    /**
     * @var string[]
     */
    public $limits;

    /**
     * @var string[]
     */
    public $requests;
    protected $_name = [
        'limits'   => 'Limits',
        'requests' => 'Requests',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limits) {
            $res['Limits'] = $this->limits;
        }
        if (null !== $this->requests) {
            $res['Requests'] = $this->requests;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sidecarProxyInitAckSloResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Limits'])) {
            $model->limits = $map['Limits'];
        }
        if (isset($map['Requests'])) {
            $model->requests = $map['Requests'];
        }

        return $model;
    }
}
