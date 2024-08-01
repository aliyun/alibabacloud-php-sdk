<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\AliyunConsoleOpenApiQueryAliyunConsoleServcieListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $freeConcurrencyCount;

    /**
     * @example 100
     *
     * @var int
     */
    public $freeCount;

    /**
     * @example online_ai_algorithm_personalized_text_to_image_call_count
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @example AI算法模型-个性化文生图-在线按量调用
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'freeConcurrencyCount' => 'FreeConcurrencyCount',
        'freeCount'            => 'FreeCount',
        'serviceCode'          => 'ServiceCode',
        'serviceName'          => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->freeConcurrencyCount) {
            $res['FreeConcurrencyCount'] = $this->freeConcurrencyCount;
        }
        if (null !== $this->freeCount) {
            $res['FreeCount'] = $this->freeCount;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
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
        if (isset($map['FreeConcurrencyCount'])) {
            $model->freeConcurrencyCount = $map['FreeConcurrencyCount'];
        }
        if (isset($map['FreeCount'])) {
            $model->freeCount = $map['FreeCount'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
