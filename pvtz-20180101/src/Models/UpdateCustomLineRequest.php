<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class UpdateCustomLineRequest extends Model
{
    /**
     * @description The IPv4 CIDR blocks.
     *
     * This parameter is required.
     * @var string[]
     */
    public $ipv4s;

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
     * This parameter is required.
     * @example 100003
     *
     * @var string
     */
    public $lineId;

    /**
     * @description The name of the custom line.
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'ipv4s'  => 'Ipv4s',
        'lang'   => 'Lang',
        'lineId' => 'LineId',
        'name'   => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv4s) {
            $res['Ipv4s'] = $this->ipv4s;
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

    /**
     * @param array $map
     *
     * @return UpdateCustomLineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv4s'])) {
            if (!empty($map['Ipv4s'])) {
                $model->ipv4s = $map['Ipv4s'];
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
