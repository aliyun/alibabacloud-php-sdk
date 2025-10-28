<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListClusterMembersResponseBody\clusterMemberPage;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListClusterMembersResponseBody\clusterMemberPage\clusterMemberList\clusterMember;

class clusterMemberList extends Model
{
    /**
     * @var clusterMember[]
     */
    public $clusterMember;
    protected $_name = [
        'clusterMember' => 'ClusterMember',
    ];

    public function validate()
    {
        if (\is_array($this->clusterMember)) {
            Model::validateArray($this->clusterMember);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterMember) {
            if (\is_array($this->clusterMember)) {
                $res['ClusterMember'] = [];
                $n1 = 0;
                foreach ($this->clusterMember as $item1) {
                    $res['ClusterMember'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ClusterMember'])) {
            if (!empty($map['ClusterMember'])) {
                $model->clusterMember = [];
                $n1 = 0;
                foreach ($map['ClusterMember'] as $item1) {
                    $model->clusterMember[$n1] = clusterMember::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
