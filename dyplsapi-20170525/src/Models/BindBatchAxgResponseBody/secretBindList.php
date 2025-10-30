<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindBatchAxgResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindBatchAxgResponseBody\secretBindList\secretBind;

class secretBindList extends Model
{
    /**
     * @var secretBind[]
     */
    public $secretBind;
    protected $_name = [
        'secretBind' => 'SecretBind',
    ];

    public function validate()
    {
        if (\is_array($this->secretBind)) {
            Model::validateArray($this->secretBind);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->secretBind) {
            if (\is_array($this->secretBind)) {
                $res['SecretBind'] = [];
                $n1 = 0;
                foreach ($this->secretBind as $item1) {
                    $res['SecretBind'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SecretBind'])) {
            if (!empty($map['SecretBind'])) {
                $model->secretBind = [];
                $n1 = 0;
                foreach ($map['SecretBind'] as $item1) {
                    $model->secretBind[$n1] = secretBind::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
