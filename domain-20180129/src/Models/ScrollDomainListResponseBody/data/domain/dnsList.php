<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\ScrollDomainListResponseBody\data\domain;

use AlibabaCloud\Dara\Model;

class dnsList extends Model
{
    /**
     * @var string[]
     */
    public $dns;
    protected $_name = [
        'dns' => 'Dns',
    ];

    public function validate()
    {
        if (\is_array($this->dns)) {
            Model::validateArray($this->dns);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dns) {
            if (\is_array($this->dns)) {
                $res['Dns'] = [];
                $n1 = 0;
                foreach ($this->dns as $item1) {
                    $res['Dns'][$n1] = $item1;
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
        if (isset($map['Dns'])) {
            if (!empty($map['Dns'])) {
                $model->dns = [];
                $n1 = 0;
                foreach ($map['Dns'] as $item1) {
                    $model->dns[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
