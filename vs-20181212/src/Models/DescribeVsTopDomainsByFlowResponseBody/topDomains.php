<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsTopDomainsByFlowResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsTopDomainsByFlowResponseBody\topDomains\topDomain;

class topDomains extends Model
{
    /**
     * @var topDomain[]
     */
    public $topDomain;
    protected $_name = [
        'topDomain' => 'TopDomain',
    ];

    public function validate()
    {
        if (\is_array($this->topDomain)) {
            Model::validateArray($this->topDomain);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->topDomain) {
            if (\is_array($this->topDomain)) {
                $res['TopDomain'] = [];
                $n1 = 0;
                foreach ($this->topDomain as $item1) {
                    $res['TopDomain'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TopDomain'])) {
            if (!empty($map['TopDomain'])) {
                $model->topDomain = [];
                $n1 = 0;
                foreach ($map['TopDomain'] as $item1) {
                    $model->topDomain[$n1] = topDomain::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
