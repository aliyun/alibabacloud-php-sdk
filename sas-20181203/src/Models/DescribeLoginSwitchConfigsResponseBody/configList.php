<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLoginSwitchConfigsResponseBody;

use AlibabaCloud\Tea\Model;

class configList extends Model
{
    /**
     * @example login_common_ip
     *
     * @var string
     */
    public $item;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'item'   => 'Item',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
