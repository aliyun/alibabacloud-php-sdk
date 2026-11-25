<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class AddDeviceBelongIdentifiersResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $identifierIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'identifierIds' => 'IdentifierIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->identifierIds)) {
            Model::validateArray($this->identifierIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identifierIds) {
            if (\is_array($this->identifierIds)) {
                $res['IdentifierIds'] = [];
                $n1 = 0;
                foreach ($this->identifierIds as $item1) {
                    $res['IdentifierIds'][$n1] = $item1;
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
        if (isset($map['IdentifierIds'])) {
            if (!empty($map['IdentifierIds'])) {
                $model->identifierIds = [];
                $n1 = 0;
                foreach ($map['IdentifierIds'] as $item1) {
                    $model->identifierIds[$n1] = $item1;
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
