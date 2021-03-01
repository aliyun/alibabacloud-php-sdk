<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListClusterMembersResponseBody\clusterMemberPage;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListClusterMembersResponseBody\clusterMemberPage\clusterMemberList\clusterMember;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterMember) {
            $res['ClusterMember'] = [];
            if (null !== $this->clusterMember && \is_array($this->clusterMember)) {
                $n = 0;
                foreach ($this->clusterMember as $item) {
                    $res['ClusterMember'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterMemberList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterMember'])) {
            if (!empty($map['ClusterMember'])) {
                $model->clusterMember = [];
                $n                    = 0;
                foreach ($map['ClusterMember'] as $item) {
                    $model->clusterMember[$n++] = null !== $item ? clusterMember::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
