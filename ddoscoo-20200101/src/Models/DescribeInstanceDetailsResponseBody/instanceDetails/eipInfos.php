<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceDetailsResponseBody\instanceDetails;

use AlibabaCloud\Tea\Model;

class eipInfos extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $eip;
    protected $_name = [
        'status' => 'Status',
        'eip'    => 'Eip',
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
        if (null !== $this->eip) {
            $res['Eip'] = $this->eip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eipInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Eip'])) {
            $model->eip = $map['Eip'];
        }

        return $model;
    }
}
