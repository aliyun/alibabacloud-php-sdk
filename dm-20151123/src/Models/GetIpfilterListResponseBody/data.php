<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\GetIpfilterListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetIpfilterListResponseBody\data\ipfilters;

class data extends Model
{
    /**
     * @var ipfilters[]
     */
    public $ipfilters;
    protected $_name = [
        'ipfilters' => 'ipfilters',
    ];

    public function validate()
    {
        if (\is_array($this->ipfilters)) {
            Model::validateArray($this->ipfilters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipfilters) {
            if (\is_array($this->ipfilters)) {
                $res['ipfilters'] = [];
                $n1 = 0;
                foreach ($this->ipfilters as $item1) {
                    $res['ipfilters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ipfilters'])) {
            if (!empty($map['ipfilters'])) {
                $model->ipfilters = [];
                $n1 = 0;
                foreach ($map['ipfilters'] as $item1) {
                    $model->ipfilters[$n1++] = ipfilters::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
