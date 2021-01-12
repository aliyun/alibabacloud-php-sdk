<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoResponseBody\DBInstanceNetInfos\DBInstanceNetInfo;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoResponseBody\DBInstanceNetInfos\DBInstanceNetInfo\securityIPGroups\securityIPGroup;
use AlibabaCloud\Tea\Model;

class securityIPGroups extends Model
{
    /**
     * @var securityIPGroup[]
     */
    public $securityIPGroup;
    protected $_name = [
        'securityIPGroup' => 'securityIPGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityIPGroup) {
            $res['securityIPGroup'] = [];
            if (null !== $this->securityIPGroup && \is_array($this->securityIPGroup)) {
                $n = 0;
                foreach ($this->securityIPGroup as $item) {
                    $res['securityIPGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityIPGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['securityIPGroup'])) {
            if (!empty($map['securityIPGroup'])) {
                $model->securityIPGroup = [];
                $n                      = 0;
                foreach ($map['securityIPGroup'] as $item) {
                    $model->securityIPGroup[$n++] = null !== $item ? securityIPGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
