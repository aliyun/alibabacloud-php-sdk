<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\AgentCancelCallResponseBody;

use AlibabaCloud\Dara\Model;

class model_ extends Model
{
    /**
     * @var string[]
     */
    public $unHandleNumbers;
    protected $_name = [
        'unHandleNumbers' => 'UnHandleNumbers',
    ];

    public function validate()
    {
        if (\is_array($this->unHandleNumbers)) {
            Model::validateArray($this->unHandleNumbers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->unHandleNumbers) {
            if (\is_array($this->unHandleNumbers)) {
                $res['UnHandleNumbers'] = [];
                $n1 = 0;
                foreach ($this->unHandleNumbers as $item1) {
                    $res['UnHandleNumbers'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['UnHandleNumbers'])) {
            if (!empty($map['UnHandleNumbers'])) {
                $model->unHandleNumbers = [];
                $n1 = 0;
                foreach ($map['UnHandleNumbers'] as $item1) {
                    $model->unHandleNumbers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
