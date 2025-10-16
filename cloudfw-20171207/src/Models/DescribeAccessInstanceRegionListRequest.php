<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeAccessInstanceRegionListRequest extends Model
{
    /**
     * @var string
     */
    public $accessInstanceStatus;

    /**
     * @var string
     */
    public $accessInstanceType;
    protected $_name = [
        'accessInstanceStatus' => 'AccessInstanceStatus',
        'accessInstanceType' => 'AccessInstanceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessInstanceStatus) {
            $res['AccessInstanceStatus'] = $this->accessInstanceStatus;
        }

        if (null !== $this->accessInstanceType) {
            $res['AccessInstanceType'] = $this->accessInstanceType;
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
        if (isset($map['AccessInstanceStatus'])) {
            $model->accessInstanceStatus = $map['AccessInstanceStatus'];
        }

        if (isset($map['AccessInstanceType'])) {
            $model->accessInstanceType = $map['AccessInstanceType'];
        }

        return $model;
    }
}
