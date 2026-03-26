<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Dara\Model;

class GetInsightTypesResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $insightTypes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'insightTypes' => 'InsightTypes',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->insightTypes)) {
            Model::validateArray($this->insightTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->insightTypes) {
            if (\is_array($this->insightTypes)) {
                $res['InsightTypes'] = [];
                foreach ($this->insightTypes as $key1 => $value1) {
                    $res['InsightTypes'][$key1] = $value1;
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
        if (isset($map['InsightTypes'])) {
            if (!empty($map['InsightTypes'])) {
                $model->insightTypes = [];
                foreach ($map['InsightTypes'] as $key1 => $value1) {
                    $model->insightTypes[$key1] = $value1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
