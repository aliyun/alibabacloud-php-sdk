<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrMainVersionResponseBody\emrMainVersionList\emrMainVersion;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrMainVersionResponseBody\emrMainVersionList\emrMainVersion\clusterTypeWhiteUserList\clusterTypeWhiteUser;
use AlibabaCloud\Tea\Model;

class clusterTypeWhiteUserList extends Model
{
    /**
     * @var clusterTypeWhiteUser[]
     */
    public $clusterTypeWhiteUser;
    protected $_name = [
        'clusterTypeWhiteUser' => 'ClusterTypeWhiteUser',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterTypeWhiteUser) {
            $res['ClusterTypeWhiteUser'] = [];
            if (null !== $this->clusterTypeWhiteUser && \is_array($this->clusterTypeWhiteUser)) {
                $n = 0;
                foreach ($this->clusterTypeWhiteUser as $item) {
                    $res['ClusterTypeWhiteUser'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterTypeWhiteUserList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterTypeWhiteUser'])) {
            if (!empty($map['ClusterTypeWhiteUser'])) {
                $model->clusterTypeWhiteUser = [];
                $n                           = 0;
                foreach ($map['ClusterTypeWhiteUser'] as $item) {
                    $model->clusterTypeWhiteUser[$n++] = null !== $item ? clusterTypeWhiteUser::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
