<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qianzhou\V20211111\Models;

use AlibabaCloud\Tea\Model;

class ListClusterDeprecatedAPIRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $targetVersion;
    protected $_name = [
        'clusterId'     => 'cluster_id',
        'pageNo'        => 'page_no',
        'pageSize'      => 'page_size',
        'targetVersion' => 'target_version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }
        if (null !== $this->pageNo) {
            $res['page_no'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->targetVersion) {
            $res['target_version'] = $this->targetVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClusterDeprecatedAPIRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['page_no'])) {
            $model->pageNo = $map['page_no'];
        }
        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }
        if (isset($map['target_version'])) {
            $model->targetVersion = $map['target_version'];
        }

        return $model;
    }
}
