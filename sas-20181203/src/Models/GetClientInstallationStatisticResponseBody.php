<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetClientInstallationStatisticResponseBody\clientInstallRatio;
use AlibabaCloud\Tea\Model;

class GetClientInstallationStatisticResponseBody extends Model
{
    /**
     * @var clientInstallRatio
     */
    public $clientInstallRatio;

    /**
     * @example F62DD457-2588-589A-B1F6-A1245895D2AB
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clientInstallRatio' => 'ClientInstallRatio',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientInstallRatio) {
            $res['ClientInstallRatio'] = null !== $this->clientInstallRatio ? $this->clientInstallRatio->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetClientInstallationStatisticResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientInstallRatio'])) {
            $model->clientInstallRatio = clientInstallRatio::fromMap($map['ClientInstallRatio']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
