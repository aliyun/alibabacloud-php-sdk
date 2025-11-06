<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\ScrollDomainListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\ScrollDomainListResponseBody\data\domain;

class data extends Model
{
    /**
     * @var domain[]
     */
    public $domain;
    protected $_name = [
        'domain' => 'Domain',
    ];

    public function validate()
    {
        if (\is_array($this->domain)) {
            Model::validateArray($this->domain);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            if (\is_array($this->domain)) {
                $res['Domain'] = [];
                $n1 = 0;
                foreach ($this->domain as $item1) {
                    $res['Domain'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Domain'])) {
            if (!empty($map['Domain'])) {
                $model->domain = [];
                $n1 = 0;
                foreach ($map['Domain'] as $item1) {
                    $model->domain[$n1] = domain::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
