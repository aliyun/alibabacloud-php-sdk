<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class ListJobsRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * You can call the [ListClusters](~~87116~~) operation to query the cluster ID.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the user that runs the job.
     *
     * You can call the [ListUsers](~~188572~~) operation to query the users in the cluster.
     * @example user1
     *
     * @var string
     */
    public $owner;

    /**
     * @description The number of the page to return.
     *
     * Default value: 1
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Maximum value: 50.
     *
     * Default value: 10
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Specifies whether the job can be rerun. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false
     * @example false
     *
     * @var string
     */
    public $rerunable;

    /**
     * @description The status of the job. Valid values:
     *
     *   all
     *   finished
     *   notfinish
     *
     * @example finished
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'owner'      => 'Owner',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'rerunable'  => 'Rerunable',
        'state'      => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->rerunable) {
            $res['Rerunable'] = $this->rerunable;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Rerunable'])) {
            $model->rerunable = $map['Rerunable'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
