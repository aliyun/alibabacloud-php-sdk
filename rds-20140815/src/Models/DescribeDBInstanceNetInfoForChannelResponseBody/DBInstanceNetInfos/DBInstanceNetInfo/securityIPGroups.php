<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoForChannelResponseBody\DBInstanceNetInfos\DBInstanceNetInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoForChannelResponseBody\DBInstanceNetInfos\DBInstanceNetInfo\securityIPGroups\securityIPGroup;

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
        if (\is_array($this->securityIPGroup)) {
            Model::validateArray($this->securityIPGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->securityIPGroup) {
            if (\is_array($this->securityIPGroup)) {
                $res['securityIPGroup'] = [];
                $n1 = 0;
                foreach ($this->securityIPGroup as $item1) {
                    $res['securityIPGroup'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['securityIPGroup'])) {
            if (!empty($map['securityIPGroup'])) {
                $model->securityIPGroup = [];
                $n1 = 0;
                foreach ($map['securityIPGroup'] as $item1) {
                    $model->securityIPGroup[$n1++] = securityIPGroup::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
