<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetClusterCheckItemWarningStatisticsResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetClusterCheckItemWarningStatisticsResponseBody extends Model
{
    /**
     * @description The statistics on risk items by risk level.
     *
     * @var data
     */
    public $data;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example C2B285A3-3493-5C5F-A224-4CCE4BFC****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetClusterCheckItemWarningStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
