<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\BatchCheckResourceMeasureResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ModuleResultsValue;

class module extends Model
{
    /**
     * @var bool
     */
    public $allPassed;

    /**
     * @var ModuleResultsValue[]
     */
    public $results;
    protected $_name = [
        'allPassed' => 'AllPassed',
        'results' => 'Results',
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
        if (null !== $this->allPassed) {
            $res['AllPassed'] = $this->allPassed;
        }

        if (null !== $this->results) {
            if (\is_array($this->results)) {
                $res['Results'] = [];
                foreach ($this->results as $key1 => $value1) {
                    $res['Results'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
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
        if (isset($map['AllPassed'])) {
            $model->allPassed = $map['AllPassed'];
        }

        if (isset($map['Results'])) {
            if (!empty($map['Results'])) {
                $model->results = [];
                foreach ($map['Results'] as $key1 => $value1) {
                    $model->results[$key1] = ModuleResultsValue::fromMap($value1);
                }
            }
        }

        return $model;
    }
}
