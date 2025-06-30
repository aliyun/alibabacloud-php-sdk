<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Dara\Model;

class UpdateCustomLineRequest extends Model
{
    /**
     * @var string[]
     */
    public $ipv4s;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $lineId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'ipv4s' => 'Ipv4s',
        'lang' => 'Lang',
        'lineId' => 'LineId',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->ipv4s)) {
            Model::validateArray($this->ipv4s);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv4s) {
            if (\is_array($this->ipv4s)) {
                $res['Ipv4s'] = [];
                $n1 = 0;
                foreach ($this->ipv4s as $item1) {
                    $res['Ipv4s'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->lineId) {
            $res['LineId'] = $this->lineId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Ipv4s'])) {
            if (!empty($map['Ipv4s'])) {
                $model->ipv4s = [];
                $n1 = 0;
                foreach ($map['Ipv4s'] as $item1) {
                    $model->ipv4s[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['LineId'])) {
            $model->lineId = $map['LineId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
