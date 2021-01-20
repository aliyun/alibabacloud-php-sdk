<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMonitorResourceQuotaAttributeRequest extends Model
{
    /**
     * @var bool
     */
    public $showUsed;
    protected $_name = [
        'showUsed' => 'ShowUsed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->showUsed) {
            $res['ShowUsed'] = $this->showUsed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMonitorResourceQuotaAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ShowUsed'])) {
            $model->showUsed = $map['ShowUsed'];
        }

        return $model;
    }
}
