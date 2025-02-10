<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCustomLineRequest\ipSegment;

class UpdateCustomLineRequest extends Model
{
    /**
     * @var ipSegment[]
     */
    public $ipSegment;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var int
     */
    public $lineId;
    /**
     * @var string
     */
    public $lineName;
    protected $_name = [
        'ipSegment' => 'IpSegment',
        'lang'      => 'Lang',
        'lineId'    => 'LineId',
        'lineName'  => 'LineName',
    ];

    public function validate()
    {
        if (\is_array($this->ipSegment)) {
            Model::validateArray($this->ipSegment);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipSegment) {
            if (\is_array($this->ipSegment)) {
                $res['IpSegment'] = [];
                $n1               = 0;
                foreach ($this->ipSegment as $item1) {
                    $res['IpSegment'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->lineId) {
            $res['LineId'] = $this->lineId;
        }

        if (null !== $this->lineName) {
            $res['LineName'] = $this->lineName;
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
        if (isset($map['IpSegment'])) {
            if (!empty($map['IpSegment'])) {
                $model->ipSegment = [];
                $n1               = 0;
                foreach ($map['IpSegment'] as $item1) {
                    $model->ipSegment[$n1++] = ipSegment::fromMap($item1);
                }
            }
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['LineId'])) {
            $model->lineId = $map['LineId'];
        }

        if (isset($map['LineName'])) {
            $model->lineName = $map['LineName'];
        }

        return $model;
    }
}
