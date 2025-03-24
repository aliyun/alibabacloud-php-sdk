<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825\Models;

use AlibabaCloud\Tea\Model;

class DescribeDashboardResponseBody extends Model
{
    /**
     * @example {
     * "success":true,
     * "model":{
     * "perfMonthCount":0,
     * "compatibilityMonthCount":0,
     * "perfLastMonthCount":0,
     * "compatibilityLastMonthCount":0,
     * "automationMonthCount":0,
     * "automationLastMonthCount":0
     * }
     * }
     *
     * @var string
     */
    public $model;

    /**
     * @example 4CC30A8F-787C-55CA-87A6-7D1BED56067E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'model' => 'Model',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDashboardResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
