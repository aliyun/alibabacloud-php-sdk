<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetTextTemplateResponseBody\availableIndustry;
use AlibabaCloud\Tea\Model;

class GetTextTemplateResponseBody extends Model
{
    /**
     * @var availableIndustry
     */
    public $availableIndustry;

    /**
     * @example 3239281273464326823
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'availableIndustry' => 'availableIndustry',
        'requestId'         => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableIndustry) {
            $res['availableIndustry'] = null !== $this->availableIndustry ? $this->availableIndustry->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTextTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['availableIndustry'])) {
            $model->availableIndustry = availableIndustry::fromMap($map['availableIndustry']);
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
