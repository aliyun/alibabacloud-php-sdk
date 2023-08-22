<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class ListArtifactBuildTaskLogRequest extends Model
{
    /**
     * @description The ID of the artifact build task.
     *
     * @example i2a-1yu****
     *
     * @var string
     */
    public $buildTaskId;

    /**
     * @description The ID of the Container Registry instance.
     *
     * @example cri-shac42yvqzvq****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 100
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'buildTaskId' => 'BuildTaskId',
        'instanceId'  => 'InstanceId',
        'page'        => 'Page',
        'pageSize'    => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildTaskId) {
            $res['BuildTaskId'] = $this->buildTaskId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListArtifactBuildTaskLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuildTaskId'])) {
            $model->buildTaskId = $map['BuildTaskId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
