<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetClientRatioStatisticResponseBody\clientInstallRatio;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetClientRatioStatisticResponseBody\clientOnlineRatio;
use AlibabaCloud\Tea\Model;

class GetClientRatioStatisticResponseBody extends Model
{
    /**
     * @description The statistics on the client installation rate.
     *
     * @var clientInstallRatio
     */
    public $clientInstallRatio;

    /**
     * @description The statistics on the client online rate.
     *
     * @var clientOnlineRatio
     */
    public $clientOnlineRatio;

    /**
     * @description The list of time when statistics were collected.
     *
     * @var int[]
     */
    public $dates;

    /**
     * @description The request ID.
     *
     * @example A4EB8B1C-1DEC-5E18-BCD0-D1BBB3936FA7
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clientInstallRatio' => 'ClientInstallRatio',
        'clientOnlineRatio'  => 'ClientOnlineRatio',
        'dates'              => 'Dates',
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
        if (null !== $this->clientOnlineRatio) {
            $res['ClientOnlineRatio'] = null !== $this->clientOnlineRatio ? $this->clientOnlineRatio->toMap() : null;
        }
        if (null !== $this->dates) {
            $res['Dates'] = $this->dates;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetClientRatioStatisticResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientInstallRatio'])) {
            $model->clientInstallRatio = clientInstallRatio::fromMap($map['ClientInstallRatio']);
        }
        if (isset($map['ClientOnlineRatio'])) {
            $model->clientOnlineRatio = clientOnlineRatio::fromMap($map['ClientOnlineRatio']);
        }
        if (isset($map['Dates'])) {
            if (!empty($map['Dates'])) {
                $model->dates = $map['Dates'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
