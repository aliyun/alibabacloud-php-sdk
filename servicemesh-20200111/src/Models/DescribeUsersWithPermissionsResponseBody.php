<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;

class DescribeUsersWithPermissionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $UIDs;
    protected $_name = [
        'requestId' => 'RequestId',
        'UIDs' => 'UIDs',
    ];

    public function validate()
    {
        if (\is_array($this->UIDs)) {
            Model::validateArray($this->UIDs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->UIDs) {
            if (\is_array($this->UIDs)) {
                $res['UIDs'] = [];
                $n1 = 0;
                foreach ($this->UIDs as $item1) {
                    $res['UIDs'][$n1] = $item1;
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

        if (isset($map['UIDs'])) {
            if (!empty($map['UIDs'])) {
                $model->UIDs = [];
                $n1 = 0;
                foreach ($map['UIDs'] as $item1) {
                    $model->UIDs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
