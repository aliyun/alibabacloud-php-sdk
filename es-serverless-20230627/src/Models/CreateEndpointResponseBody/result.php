<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\CreateEndpointResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example essep-abd***dks
     *
     * @var string
     */
    public $endpointId;
    protected $_name = [
        'endpointId' => 'endpointId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointId) {
            $res['endpointId'] = $this->endpointId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endpointId'])) {
            $model->endpointId = $map['endpointId'];
        }

        return $model;
    }
}
