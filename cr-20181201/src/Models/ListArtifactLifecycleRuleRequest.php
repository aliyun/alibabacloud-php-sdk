<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class ListArtifactLifecycleRuleRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $enableDeleteTag;

    /**
     * @example cri-eztul9ucz76q****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'enableDeleteTag' => 'EnableDeleteTag',
        'instanceId'      => 'InstanceId',
        'pageNo'          => 'PageNo',
        'pageSize'        => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableDeleteTag) {
            $res['EnableDeleteTag'] = $this->enableDeleteTag;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListArtifactLifecycleRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableDeleteTag'])) {
            $model->enableDeleteTag = $map['EnableDeleteTag'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
