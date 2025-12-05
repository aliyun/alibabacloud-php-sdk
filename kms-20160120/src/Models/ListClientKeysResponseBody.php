<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListClientKeysResponseBody\clientKeys;

class ListClientKeysResponseBody extends Model
{
    /**
     * @var clientKeys[]
     */
    public $clientKeys;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clientKeys' => 'ClientKeys',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->clientKeys)) {
            Model::validateArray($this->clientKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientKeys) {
            if (\is_array($this->clientKeys)) {
                $res['ClientKeys'] = [];
                $n1 = 0;
                foreach ($this->clientKeys as $item1) {
                    $res['ClientKeys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ClientKeys'])) {
            if (!empty($map['ClientKeys'])) {
                $model->clientKeys = [];
                $n1 = 0;
                foreach ($map['ClientKeys'] as $item1) {
                    $model->clientKeys[$n1] = clientKeys::fromMap($item1);
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
