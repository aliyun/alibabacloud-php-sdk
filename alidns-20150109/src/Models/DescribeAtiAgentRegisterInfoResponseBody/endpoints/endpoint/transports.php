<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeAtiAgentRegisterInfoResponseBody\endpoints\endpoint;

use AlibabaCloud\Dara\Model;

class transports extends Model
{
    /**
     * @var string[]
     */
    public $transport;
    protected $_name = [
        'transport' => 'Transport',
    ];

    public function validate()
    {
        if (\is_array($this->transport)) {
            Model::validateArray($this->transport);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->transport) {
            if (\is_array($this->transport)) {
                $res['Transport'] = [];
                $n1 = 0;
                foreach ($this->transport as $item1) {
                    $res['Transport'][$n1] = $item1;
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
        if (isset($map['Transport'])) {
            if (!empty($map['Transport'])) {
                $model->transport = [];
                $n1 = 0;
                foreach ($map['Transport'] as $item1) {
                    $model->transport[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
