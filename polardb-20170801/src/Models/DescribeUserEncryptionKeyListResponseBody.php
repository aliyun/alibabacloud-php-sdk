<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DescribeUserEncryptionKeyListResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string[]
     */
    public $keyList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'keyList' => 'KeyList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->keyList)) {
            Model::validateArray($this->keyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->keyList) {
            if (\is_array($this->keyList)) {
                $res['KeyList'] = [];
                $n1 = 0;
                foreach ($this->keyList as $item1) {
                    $res['KeyList'][$n1++] = $item1;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['KeyList'])) {
            if (!empty($map['KeyList'])) {
                $model->keyList = [];
                $n1 = 0;
                foreach ($map['KeyList'] as $item1) {
                    $model->keyList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
