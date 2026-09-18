<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeProjectsResponseBody\items\engines;

use AlibabaCloud\Dara\Model;

class sastConfig extends Model
{
    /**
     * @var bool
     */
    public $remediation;
    protected $_name = [
        'remediation' => 'remediation',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->remediation) {
            $res['remediation'] = $this->remediation;
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
        if (isset($map['remediation'])) {
            $model->remediation = $map['remediation'];
        }

        return $model;
    }
}
