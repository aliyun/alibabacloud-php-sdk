<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kms\V20160120\Models\BatchGetSecretValueRequest\secretsList;

class BatchGetSecretValueRequest extends Model
{
    /**
     * @var secretsList[]
     */
    public $secretsList;
    protected $_name = [
        'secretsList' => 'SecretsList',
    ];

    public function validate()
    {
        if (\is_array($this->secretsList)) {
            Model::validateArray($this->secretsList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->secretsList) {
            if (\is_array($this->secretsList)) {
                $res['SecretsList'] = [];
                $n1 = 0;
                foreach ($this->secretsList as $item1) {
                    $res['SecretsList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SecretsList'])) {
            if (!empty($map['SecretsList'])) {
                $model->secretsList = [];
                $n1 = 0;
                foreach ($map['SecretsList'] as $item1) {
                    $model->secretsList[$n1] = secretsList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
