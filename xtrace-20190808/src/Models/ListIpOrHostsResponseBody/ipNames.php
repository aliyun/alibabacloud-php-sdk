<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models\ListIpOrHostsResponseBody;

use AlibabaCloud\Dara\Model;

class ipNames extends Model
{
    /**
     * @var string[]
     */
    public $ipName;
    protected $_name = [
        'ipName' => 'IpName',
    ];

    public function validate()
    {
        if (\is_array($this->ipName)) {
            Model::validateArray($this->ipName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipName) {
            if (\is_array($this->ipName)) {
                $res['IpName'] = [];
                $n1 = 0;
                foreach ($this->ipName as $item1) {
                    $res['IpName'][$n1] = $item1;
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
        if (isset($map['IpName'])) {
            if (!empty($map['IpName'])) {
                $model->ipName = [];
                $n1 = 0;
                foreach ($map['IpName'] as $item1) {
                    $model->ipName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
