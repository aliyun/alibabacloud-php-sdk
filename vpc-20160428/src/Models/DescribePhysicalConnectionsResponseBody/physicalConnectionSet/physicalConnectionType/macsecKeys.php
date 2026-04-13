<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionsResponseBody\physicalConnectionSet\physicalConnectionType;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionsResponseBody\physicalConnectionSet\physicalConnectionType\macsecKeys\macsecKey;

class macsecKeys extends Model
{
    /**
     * @var macsecKey[]
     */
    public $macsecKey;
    protected $_name = [
        'macsecKey' => 'MacsecKey',
    ];

    public function validate()
    {
        if (\is_array($this->macsecKey)) {
            Model::validateArray($this->macsecKey);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->macsecKey) {
            if (\is_array($this->macsecKey)) {
                $res['MacsecKey'] = [];
                $n1 = 0;
                foreach ($this->macsecKey as $item1) {
                    $res['MacsecKey'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MacsecKey'])) {
            if (!empty($map['MacsecKey'])) {
                $model->macsecKey = [];
                $n1 = 0;
                foreach ($map['MacsecKey'] as $item1) {
                    $model->macsecKey[$n1] = macsecKey::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
