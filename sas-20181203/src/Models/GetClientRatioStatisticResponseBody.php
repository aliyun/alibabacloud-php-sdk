<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetClientRatioStatisticResponseBody\clientInstallRatio;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetClientRatioStatisticResponseBody\clientOnlineRatio;

class GetClientRatioStatisticResponseBody extends Model
{
    /**
     * @var clientInstallRatio
     */
    public $clientInstallRatio;
    /**
     * @var clientOnlineRatio
     */
    public $clientOnlineRatio;
    /**
     * @var int[]
     */
    public $dates;
    /**
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
        if (null !== $this->clientInstallRatio) {
            $this->clientInstallRatio->validate();
        }
        if (null !== $this->clientOnlineRatio) {
            $this->clientOnlineRatio->validate();
        }
        if (\is_array($this->dates)) {
            Model::validateArray($this->dates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientInstallRatio) {
            $res['ClientInstallRatio'] = null !== $this->clientInstallRatio ? $this->clientInstallRatio->toArray($noStream) : $this->clientInstallRatio;
        }

        if (null !== $this->clientOnlineRatio) {
            $res['ClientOnlineRatio'] = null !== $this->clientOnlineRatio ? $this->clientOnlineRatio->toArray($noStream) : $this->clientOnlineRatio;
        }

        if (null !== $this->dates) {
            if (\is_array($this->dates)) {
                $res['Dates'] = [];
                $n1           = 0;
                foreach ($this->dates as $item1) {
                    $res['Dates'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->dates = [];
                $n1           = 0;
                foreach ($map['Dates'] as $item1) {
                    $model->dates[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
