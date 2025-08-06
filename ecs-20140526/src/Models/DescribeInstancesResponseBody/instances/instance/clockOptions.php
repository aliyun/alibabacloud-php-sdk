<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\Dara\Model;

class clockOptions extends Model
{
    /**
     * @var string
     */
    public $ptpStatus;
    protected $_name = [
        'ptpStatus' => 'PtpStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ptpStatus) {
            $res['PtpStatus'] = $this->ptpStatus;
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
        if (isset($map['PtpStatus'])) {
            $model->ptpStatus = $map['PtpStatus'];
        }

        return $model;
    }
}
