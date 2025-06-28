<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLogStoreKeysResponseBody;

use AlibabaCloud\Dara\Model;

class logStoreKeys extends Model
{
    /**
     * @var string[]
     */
    public $logStoreKey;
    protected $_name = [
        'logStoreKey' => 'LogStoreKey',
    ];

    public function validate()
    {
        if (\is_array($this->logStoreKey)) {
            Model::validateArray($this->logStoreKey);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logStoreKey) {
            if (\is_array($this->logStoreKey)) {
                $res['LogStoreKey'] = [];
                $n1 = 0;
                foreach ($this->logStoreKey as $item1) {
                    $res['LogStoreKey'][$n1] = $item1;
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
        if (isset($map['LogStoreKey'])) {
            if (!empty($map['LogStoreKey'])) {
                $model->logStoreKey = [];
                $n1 = 0;
                foreach ($map['LogStoreKey'] as $item1) {
                    $model->logStoreKey[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
