<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityTemplateResponseBody\dataQualityTemplate;
use AlibabaCloud\Tea\Model;

class GetDataQualityTemplateResponseBody extends Model
{
    /**
     * @var dataQualityTemplate
     */
    public $dataQualityTemplate;

    /**
     * @example 0bc14115***159376359
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataQualityTemplate' => 'DataQualityTemplate',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataQualityTemplate) {
            $res['DataQualityTemplate'] = null !== $this->dataQualityTemplate ? $this->dataQualityTemplate->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDataQualityTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataQualityTemplate'])) {
            $model->dataQualityTemplate = dataQualityTemplate::fromMap($map['DataQualityTemplate']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
