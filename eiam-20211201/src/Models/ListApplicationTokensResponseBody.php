<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationTokensResponseBody\applicationTokens;

class ListApplicationTokensResponseBody extends Model
{
    /**
     * @var applicationTokens[]
     */
    public $applicationTokens;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationTokens' => 'ApplicationTokens',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->applicationTokens)) {
            Model::validateArray($this->applicationTokens);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationTokens) {
            if (\is_array($this->applicationTokens)) {
                $res['ApplicationTokens'] = [];
                $n1 = 0;
                foreach ($this->applicationTokens as $item1) {
                    $res['ApplicationTokens'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApplicationTokens'])) {
            if (!empty($map['ApplicationTokens'])) {
                $model->applicationTokens = [];
                $n1 = 0;
                foreach ($map['ApplicationTokens'] as $item1) {
                    $model->applicationTokens[$n1] = applicationTokens::fromMap($item1);
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
