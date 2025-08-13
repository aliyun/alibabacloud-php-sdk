<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class DescribeSafConsoleResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $bizData;
    protected $_name = [
        'requestId' => 'RequestId',
        'bizData' => 'bizData',
    ];

    public function validate()
    {
        if (\is_array($this->bizData)) {
            Model::validateArray($this->bizData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->bizData) {
            if (\is_array($this->bizData)) {
                $res['bizData'] = [];
                $n1 = 0;
                foreach ($this->bizData as $item1) {
                    $res['bizData'][$n1] = $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['bizData'])) {
            if (!empty($map['bizData'])) {
                $model->bizData = [];
                $n1 = 0;
                foreach ($map['bizData'] as $item1) {
                    $model->bizData[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
