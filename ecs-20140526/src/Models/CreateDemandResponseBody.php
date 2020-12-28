<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateDemandResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $demandId;
    protected $_name = [
        'requestId' => 'RequestId',
        'demandId'  => 'DemandId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->demandId) {
            $res['DemandId'] = $this->demandId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDemandResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DemandId'])) {
            $model->demandId = $map['DemandId'];
        }

        return $model;
    }
}
