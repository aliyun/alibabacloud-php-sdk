<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListServiceGroupMonitorSourceTemplatesRequest extends Model
{
    /**
     * @example xxxx
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example xxxxx
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1000
     *
     * @var int
     */
    public $serviceGroupId;
    protected $_name = [
        'clientToken'    => 'clientToken',
        'requestId'      => 'requestId',
        'serviceGroupId' => 'serviceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceGroupMonitorSourceTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
        }

        return $model;
    }
}
