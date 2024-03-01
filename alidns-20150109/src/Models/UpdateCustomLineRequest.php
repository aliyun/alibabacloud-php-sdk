<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCustomLineRequest\ipSegment;
use AlibabaCloud\Tea\Model;

class UpdateCustomLineRequest extends Model
{
    /**
     * @description The CIDR blocks. Separate IP addresses with a hyphen (-). Enter a CIDR block in each row. You can enter 1 to 50 CIDR blocks at a time. If a CIDR block contains only one IP address, enter the IP address in the format of IP1-IP1. Different CIDR blocks cannot be overlapped.
     *
     * @var ipSegment[]
     */
    public $ipSegment;

    /**
     * @description The language.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The unique ID of the custom line.
     *
     * @example 1234
     *
     * @var int
     */
    public $lineId;

    /**
     * @description The name of the custom line. The name must be 1 to 20 characters in length and can contain letters, digits, hyphens (-), and underscores (\_).
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipSegment) {
            $res['IpSegment'] = [];
            if (null !== $this->ipSegment && \is_array($this->ipSegment)) {
                $n = 0;
                foreach ($this->ipSegment as $item) {
                    $res['IpSegment'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return UpdateCustomLineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpSegment'])) {
            if (!empty($map['IpSegment'])) {
                $model->ipSegment = [];
                $n                = 0;
                foreach ($map['IpSegment'] as $item) {
                    $model->ipSegment[$n++] = null !== $item ? ipSegment::fromMap($item) : $item;
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
