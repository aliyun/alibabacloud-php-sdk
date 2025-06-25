<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest\network\domainRules;

class network extends Model
{
    /**
     * @var domainRules[]
     */
    public $domainRules;
    protected $_name = [
        'domainRules' => 'DomainRules',
    ];

    public function validate()
    {
        if (\is_array($this->domainRules)) {
            Model::validateArray($this->domainRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainRules) {
            if (\is_array($this->domainRules)) {
                $res['DomainRules'] = [];
                $n1 = 0;
                foreach ($this->domainRules as $item1) {
                    $res['DomainRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DomainRules'])) {
            if (!empty($map['DomainRules'])) {
                $model->domainRules = [];
                $n1 = 0;
                foreach ($map['DomainRules'] as $item1) {
                    $model->domainRules[$n1] = domainRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
