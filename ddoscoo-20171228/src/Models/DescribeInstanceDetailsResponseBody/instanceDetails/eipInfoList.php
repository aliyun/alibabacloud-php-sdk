<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeInstanceDetailsResponseBody\instanceDetails;

use AlibabaCloud\Tea\Model;

class eipInfoList extends Model
{
    /**
     * @example 1.1.1.1
     *
     * @var string
     */
    public $eip;

    /**
     * @example normal
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'eip'    => 'Eip',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eip) {
            $res['Eip'] = $this->eip;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eipInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Eip'])) {
            $model->eip = $map['Eip'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
