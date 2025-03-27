<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetTextTemplateResponseBody\availableIndustry;

class GetTextTemplateResponseBody extends Model
{
    /**
     * @var availableIndustry
     */
    public $availableIndustry;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'availableIndustry' => 'availableIndustry',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->availableIndustry) {
            $this->availableIndustry->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableIndustry) {
            $res['availableIndustry'] = null !== $this->availableIndustry ? $this->availableIndustry->toArray($noStream) : $this->availableIndustry;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['availableIndustry'])) {
            $model->availableIndustry = availableIndustry::fromMap($map['availableIndustry']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
