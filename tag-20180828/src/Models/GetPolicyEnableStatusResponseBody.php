<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tag\V20180828\Models\GetPolicyEnableStatusResponseBody\statusModels;

class GetPolicyEnableStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var statusModels[]
     */
    public $statusModels;
    protected $_name = [
        'requestId' => 'RequestId',
        'statusModels' => 'StatusModels',
    ];

    public function validate()
    {
        if (\is_array($this->statusModels)) {
            Model::validateArray($this->statusModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->statusModels) {
            if (\is_array($this->statusModels)) {
                $res['StatusModels'] = [];
                $n1 = 0;
                foreach ($this->statusModels as $item1) {
                    $res['StatusModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['StatusModels'])) {
            if (!empty($map['StatusModels'])) {
                $model->statusModels = [];
                $n1 = 0;
                foreach ($map['StatusModels'] as $item1) {
                    $model->statusModels[$n1] = statusModels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
