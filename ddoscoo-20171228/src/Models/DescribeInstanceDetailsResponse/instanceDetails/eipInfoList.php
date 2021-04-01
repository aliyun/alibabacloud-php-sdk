<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeInstanceDetailsResponse\instanceDetails;

use AlibabaCloud\Tea\Model;

class eipInfoList extends Model
{
    /**
     * @var string
     */
    public $eip;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'eip'    => 'Eip',
        'status' => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('eip', $this->eip, true);
        Model::validateRequired('status', $this->status, true);
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
