<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindBatchAxgResponseBody;

use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindBatchAxgResponseBody\secretBindList\secretBind;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->secretBind) {
            $res['SecretBind'] = [];
            if (null !== $this->secretBind && \is_array($this->secretBind)) {
                $n = 0;
                foreach ($this->secretBind as $item) {
                    $res['SecretBind'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secretBindList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecretBind'])) {
            if (!empty($map['SecretBind'])) {
                $model->secretBind = [];
                $n                 = 0;
                foreach ($map['SecretBind'] as $item) {
                    $model->secretBind[$n++] = null !== $item ? secretBind::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
