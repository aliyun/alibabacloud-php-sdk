<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyCollectorsResponseBody\collectors;

class ListIntegrationPolicyCollectorsResponseBody extends Model
{
    /**
     * @var collectors[]
     */
    public $collectors;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'collectors' => 'collectors',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->collectors)) {
            Model::validateArray($this->collectors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collectors) {
            if (\is_array($this->collectors)) {
                $res['collectors'] = [];
                $n1 = 0;
                foreach ($this->collectors as $item1) {
                    $res['collectors'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['collectors'])) {
            if (!empty($map['collectors'])) {
                $model->collectors = [];
                $n1 = 0;
                foreach ($map['collectors'] as $item1) {
                    $model->collectors[$n1] = collectors::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
