<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType;

use AlibabaCloud\Dara\Model;

class clock extends Model
{
    /**
     * @var string
     */
    public $ptpSupport;
    protected $_name = [
        'ptpSupport' => 'PtpSupport',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ptpSupport) {
            $res['PtpSupport'] = $this->ptpSupport;
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
        if (isset($map['PtpSupport'])) {
            $model->ptpSupport = $map['PtpSupport'];
        }

        return $model;
    }
}
