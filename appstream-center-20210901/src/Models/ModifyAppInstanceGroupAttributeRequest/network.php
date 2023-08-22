<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest\network\domainRules;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainRules) {
            $res['DomainRules'] = [];
            if (null !== $this->domainRules && \is_array($this->domainRules)) {
                $n = 0;
                foreach ($this->domainRules as $item) {
                    $res['DomainRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return network
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainRules'])) {
            if (!empty($map['DomainRules'])) {
                $model->domainRules = [];
                $n                  = 0;
                foreach ($map['DomainRules'] as $item) {
                    $model->domainRules[$n++] = null !== $item ? domainRules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
