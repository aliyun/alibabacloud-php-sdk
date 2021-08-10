<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20190620\Models\DescribeDBInstanceSecurityIpsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string[]
     */
    public $whiteList;
    protected $_name = [
        'groupName' => 'GroupName',
        'whiteList' => 'WhiteList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->whiteList) {
            $res['WhiteList'] = $this->whiteList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['WhiteList'])) {
            if (!empty($map['WhiteList'])) {
                $model->whiteList = $map['WhiteList'];
            }
        }

        return $model;
    }
}
