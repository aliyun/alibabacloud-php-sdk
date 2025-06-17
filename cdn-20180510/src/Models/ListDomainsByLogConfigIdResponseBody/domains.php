<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\ListDomainsByLogConfigIdResponseBody;

use AlibabaCloud\Dara\Model;

class domains extends Model
{
    /**
     * @var string[]
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
                    $res['Domain'][$n1] = $item1;
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
                    $model->domain[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
