<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class GetQpsStatsResponseBody extends Model
{
    /**
     * @var ChartsValue[]
     */
    public $charts;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'charts' => 'Charts',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->charts)) {
            Model::validateArray($this->charts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->charts) {
            if (\is_array($this->charts)) {
                $res['Charts'] = [];
                foreach ($this->charts as $key1 => $value1) {
                    $res['Charts'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
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
        if (isset($map['Charts'])) {
            if (!empty($map['Charts'])) {
                $model->charts = [];
                foreach ($map['Charts'] as $key1 => $value1) {
                    $model->charts[$key1] = ChartsValue::fromMap($value1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
