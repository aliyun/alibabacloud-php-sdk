<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\eciSecurityContext\sysctls;

class eciSecurityContext extends Model
{
    /**
     * @var sysctls[]
     */
    public $sysctls;
    protected $_name = [
        'sysctls' => 'Sysctls',
    ];

    public function validate()
    {
        if (\is_array($this->sysctls)) {
            Model::validateArray($this->sysctls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sysctls) {
            if (\is_array($this->sysctls)) {
                $res['Sysctls'] = [];
                $n1 = 0;
                foreach ($this->sysctls as $item1) {
                    $res['Sysctls'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Sysctls'])) {
            if (!empty($map['Sysctls'])) {
                $model->sysctls = [];
                $n1 = 0;
                foreach ($map['Sysctls'] as $item1) {
                    $model->sysctls[$n1++] = sysctls::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
