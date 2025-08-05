<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ListUserAdOrganizationUnitsResponseBody\OUNames;

class ListUserAdOrganizationUnitsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var OUNames[]
     */
    public $OUNames;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken' => 'NextToken',
        'OUNames' => 'OUNames',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->OUNames)) {
            Model::validateArray($this->OUNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->OUNames) {
            if (\is_array($this->OUNames)) {
                $res['OUNames'] = [];
                $n1 = 0;
                foreach ($this->OUNames as $item1) {
                    $res['OUNames'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OUNames'])) {
            if (!empty($map['OUNames'])) {
                $model->OUNames = [];
                $n1 = 0;
                foreach ($map['OUNames'] as $item1) {
                    $model->OUNames[$n1] = OUNames::fromMap($item1);
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
