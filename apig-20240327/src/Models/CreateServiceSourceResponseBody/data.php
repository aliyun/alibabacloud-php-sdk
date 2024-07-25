<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateServiceSourceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example gss-cpqots5lht****
     *
     * @var string
     */
    public $serviceSourceId;
    protected $_name = [
        'serviceSourceId' => 'serviceSourceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceSourceId) {
            $res['serviceSourceId'] = $this->serviceSourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['serviceSourceId'])) {
            $model->serviceSourceId = $map['serviceSourceId'];
        }

        return $model;
    }
}
