<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\BatchDeleteHttpApiRoutesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\DataResultsValue;

class data extends Model
{
    /**
     * @var int
     */
    public $failedCount;

    /**
     * @var DataResultsValue[]
     */
    public $results;

    /**
     * @var int
     */
    public $successCount;
    protected $_name = [
        'failedCount' => 'failedCount',
        'results' => 'results',
        'successCount' => 'successCount',
    ];

    public function validate()
    {
        if (\is_array($this->results)) {
            Model::validateArray($this->results);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedCount) {
            $res['failedCount'] = $this->failedCount;
        }

        if (null !== $this->results) {
            if (\is_array($this->results)) {
                $res['results'] = [];
                foreach ($this->results as $key1 => $value1) {
                    $res['results'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->successCount) {
            $res['successCount'] = $this->successCount;
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
        if (isset($map['failedCount'])) {
            $model->failedCount = $map['failedCount'];
        }

        if (isset($map['results'])) {
            if (!empty($map['results'])) {
                $model->results = [];
                foreach ($map['results'] as $key1 => $value1) {
                    $model->results[$key1] = DataResultsValue::fromMap($value1);
                }
            }
        }

        if (isset($map['successCount'])) {
            $model->successCount = $map['successCount'];
        }

        return $model;
    }
}
