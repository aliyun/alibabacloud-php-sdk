<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateRemediationsResponseBody\remediations;

class ListAggregateRemediationsResponseBody extends Model
{
    /**
     * @var remediations[]
     */
    public $remediations;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'remediations' => 'Remediations',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->remediations)) {
            Model::validateArray($this->remediations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->remediations) {
            if (\is_array($this->remediations)) {
                $res['Remediations'] = [];
                $n1 = 0;
                foreach ($this->remediations as $item1) {
                    $res['Remediations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Remediations'])) {
            if (!empty($map['Remediations'])) {
                $model->remediations = [];
                $n1 = 0;
                foreach ($map['Remediations'] as $item1) {
                    $model->remediations[$n1] = remediations::fromMap($item1);
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
