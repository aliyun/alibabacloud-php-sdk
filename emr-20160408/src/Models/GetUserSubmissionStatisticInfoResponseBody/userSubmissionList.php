<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\GetUserSubmissionStatisticInfoResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\GetUserSubmissionStatisticInfoResponseBody\userSubmissionList\clusterStatUserSubmission;
use AlibabaCloud\Tea\Model;

class userSubmissionList extends Model
{
    /**
     * @var clusterStatUserSubmission[]
     */
    public $clusterStatUserSubmission;
    protected $_name = [
        'clusterStatUserSubmission' => 'ClusterStatUserSubmission',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterStatUserSubmission) {
            $res['ClusterStatUserSubmission'] = [];
            if (null !== $this->clusterStatUserSubmission && \is_array($this->clusterStatUserSubmission)) {
                $n = 0;
                foreach ($this->clusterStatUserSubmission as $item) {
                    $res['ClusterStatUserSubmission'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userSubmissionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterStatUserSubmission'])) {
            if (!empty($map['ClusterStatUserSubmission'])) {
                $model->clusterStatUserSubmission = [];
                $n                                = 0;
                foreach ($map['ClusterStatUserSubmission'] as $item) {
                    $model->clusterStatUserSubmission[$n++] = null !== $item ? clusterStatUserSubmission::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
