<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectResourceSummaryResponseBody\resourceSummary;

use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @var int
     */
    public $resourceCnt;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string[]
     */
    public $taskIds;
    protected $_name = [
        'resourceCnt'  => 'resourceCnt',
        'resourceType' => 'resourceType',
        'taskIds'      => 'taskIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceCnt) {
            $res['resourceCnt'] = $this->resourceCnt;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->taskIds) {
            $res['taskIds'] = $this->taskIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['resourceCnt'])) {
            $model->resourceCnt = $map['resourceCnt'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['taskIds'])) {
            if (!empty($map['taskIds'])) {
                $model->taskIds = $map['taskIds'];
            }
        }

        return $model;
    }
}
