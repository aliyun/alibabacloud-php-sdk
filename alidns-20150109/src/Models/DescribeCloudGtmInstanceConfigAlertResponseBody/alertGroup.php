<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmInstanceConfigAlertResponseBody;

use AlibabaCloud\Tea\Model;

class alertGroup extends Model
{
    /**
     * @var string[]
     */
    public $alertGroup;
    protected $_name = [
        'alertGroup' => 'AlertGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertGroup) {
            $res['AlertGroup'] = $this->alertGroup;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertGroup'])) {
            if (!empty($map['AlertGroup'])) {
                $model->alertGroup = $map['AlertGroup'];
            }
        }

        return $model;
    }
}
