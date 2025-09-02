<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListBusinessAccessPointsResponseBody\businessAccessPoints;

class ListBusinessAccessPointsResponseBody extends Model
{
    /**
     * @var businessAccessPoints[]
     */
    public $businessAccessPoints;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'businessAccessPoints' => 'BusinessAccessPoints',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->businessAccessPoints)) {
            Model::validateArray($this->businessAccessPoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessAccessPoints) {
            if (\is_array($this->businessAccessPoints)) {
                $res['BusinessAccessPoints'] = [];
                $n1 = 0;
                foreach ($this->businessAccessPoints as $item1) {
                    $res['BusinessAccessPoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['BusinessAccessPoints'])) {
            if (!empty($map['BusinessAccessPoints'])) {
                $model->businessAccessPoints = [];
                $n1 = 0;
                foreach ($map['BusinessAccessPoints'] as $item1) {
                    $model->businessAccessPoints[$n1] = businessAccessPoints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
