<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models;

use AlibabaCloud\SDK\Xtrace\V20190808\Models\ListServicesResponseBody\services;
use AlibabaCloud\Tea\Model;

class ListServicesResponseBody extends Model
{
    /**
     * @description The ID of the region.
     *
     * @example 1E2B6A4C-6B83-4062-8B6F-AEEC1FC47DED
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The applications.
     *
     * @var services
     */
    public $services;
    protected $_name = [
        'requestId' => 'RequestId',
        'services'  => 'Services',
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
        if (null !== $this->services) {
            $res['Services'] = null !== $this->services ? $this->services->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServicesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Services'])) {
            $model->services = services::fromMap($map['Services']);
        }

        return $model;
    }
}
