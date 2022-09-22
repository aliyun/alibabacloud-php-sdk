<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\GetLaunchTemplateDataResponseBody\launchTemplateData;
use AlibabaCloud\Tea\Model;

class GetLaunchTemplateDataResponseBody extends Model
{
    /**
     * @var launchTemplateData
     */
    public $launchTemplateData;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'launchTemplateData' => 'LaunchTemplateData',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->launchTemplateData) {
            $res['LaunchTemplateData'] = null !== $this->launchTemplateData ? $this->launchTemplateData->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLaunchTemplateDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LaunchTemplateData'])) {
            $model->launchTemplateData = launchTemplateData::fromMap($map['LaunchTemplateData']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
