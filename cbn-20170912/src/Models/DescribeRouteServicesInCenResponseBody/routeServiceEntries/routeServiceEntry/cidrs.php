<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeRouteServicesInCenResponseBody\routeServiceEntries\routeServiceEntry;

use AlibabaCloud\Dara\Model;

class cidrs extends Model
{
    /**
     * @var string[]
     */
    public $cidr;
    protected $_name = [
        'cidr' => 'Cidr',
    ];

    public function validate()
    {
        if (\is_array($this->cidr)) {
            Model::validateArray($this->cidr);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidr) {
            if (\is_array($this->cidr)) {
                $res['Cidr'] = [];
                $n1          = 0;
                foreach ($this->cidr as $item1) {
                    $res['Cidr'][$n1++] = $item1;
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
        if (isset($map['Cidr'])) {
            if (!empty($map['Cidr'])) {
                $model->cidr = [];
                $n1          = 0;
                foreach ($map['Cidr'] as $item1) {
                    $model->cidr[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
