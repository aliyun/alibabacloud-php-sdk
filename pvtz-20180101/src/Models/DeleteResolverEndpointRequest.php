<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class DeleteResolverEndpointRequest extends Model
{
    /**
     * @description The endpoint ID.
     *
     * This parameter is required.
     * @example hra0**
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The language.
     *
     * @example en
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'endpointId' => 'EndpointId',
        'lang'       => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteResolverEndpointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
