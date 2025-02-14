<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetRegistryScanDayNumResponseBody\scanDayNumConfig;

class GetRegistryScanDayNumResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var scanDayNumConfig
     */
    public $scanDayNumConfig;
    protected $_name = [
        'requestId'        => 'RequestId',
        'scanDayNumConfig' => 'ScanDayNumConfig',
    ];

    public function validate()
    {
        if (null !== $this->scanDayNumConfig) {
            $this->scanDayNumConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scanDayNumConfig) {
            $res['ScanDayNumConfig'] = null !== $this->scanDayNumConfig ? $this->scanDayNumConfig->toArray($noStream) : $this->scanDayNumConfig;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ScanDayNumConfig'])) {
            $model->scanDayNumConfig = scanDayNumConfig::fromMap($map['ScanDayNumConfig']);
        }

        return $model;
    }
}
