<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDeliverListResponseBody\content\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDeliverListResponseBody\content\data\deliver\email;

class deliver extends Model
{
    /**
     * @var email
     */
    public $email;
    protected $_name = [
        'email' => 'email',
    ];

    public function validate()
    {
        if (null !== $this->email) {
            $this->email->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->email) {
            $res['email'] = null !== $this->email ? $this->email->toArray($noStream) : $this->email;
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
        if (isset($map['email'])) {
            $model->email = email::fromMap($map['email']);
        }

        return $model;
    }
}
