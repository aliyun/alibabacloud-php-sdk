<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlexConfigResponseBody;

use AlibabaCloud\Tea\Model;

class flexConfig extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $linkType;

    /**
     * @var string
     */
    public $ports;

    /**
     * @var int
     */
    public $rate;
    protected $_name = [
        'status'   => 'Status',
        'linkType' => 'LinkType',
        'ports'    => 'Ports',
        'rate'     => 'Rate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->linkType) {
            $res['LinkType'] = $this->linkType;
        }
        if (null !== $this->ports) {
            $res['Ports'] = $this->ports;
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flexConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['LinkType'])) {
            $model->linkType = $map['LinkType'];
        }
        if (isset($map['Ports'])) {
            $model->ports = $map['Ports'];
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }

        return $model;
    }
}
