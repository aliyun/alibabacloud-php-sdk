<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretsResponseBody\secretList\secret;

class secretList extends Model
{
    /**
     * @var secret[]
     */
    public $secret;
    protected $_name = [
        'secret' => 'Secret',
    ];

    public function validate()
    {
        if (\is_array($this->secret)) {
            Model::validateArray($this->secret);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->secret) {
            if (\is_array($this->secret)) {
                $res['Secret'] = [];
                $n1 = 0;
                foreach ($this->secret as $item1) {
                    $res['Secret'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Secret'])) {
            if (!empty($map['Secret'])) {
                $model->secret = [];
                $n1 = 0;
                foreach ($map['Secret'] as $item1) {
                    $model->secret[$n1] = secret::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
