<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebAccessModeResponseBody\domainModes;

class DescribeWebAccessModeResponseBody extends Model
{
    /**
     * @var domainModes[]
     */
    public $domainModes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainModes' => 'DomainModes',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->domainModes)) {
            Model::validateArray($this->domainModes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainModes) {
            if (\is_array($this->domainModes)) {
                $res['DomainModes'] = [];
                $n1 = 0;
                foreach ($this->domainModes as $item1) {
                    $res['DomainModes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DomainModes'])) {
            if (!empty($map['DomainModes'])) {
                $model->domainModes = [];
                $n1 = 0;
                foreach ($map['DomainModes'] as $item1) {
                    $model->domainModes[$n1] = domainModes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
