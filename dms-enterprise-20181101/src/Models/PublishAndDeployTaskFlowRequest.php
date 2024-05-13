<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class PublishAndDeployTaskFlowRequest extends Model
{
    /**
     * @description The ID of the task flow. You can call the [ListTaskFlow](https://help.aliyun.com/document_detail/424565.html) or [ListLhTaskFlowAndScenario](https://help.aliyun.com/document_detail/426672.html) operation to query the task flow ID.
     *
     * This parameter is required.
     * @example 7***
     *
     * @var int
     */
    public $dagId;

    /**
     * @description The ID of the tenant.
     *
     * > To view the ID of the tenant, go to the Data Management (DMS) console and move the pointer over the profile picture in the upper-right corner. For more information, see [View information about the current tenant](https://help.aliyun.com/document_detail/181330.html).
     * @example 3***
     *
     * @var int
     */
    public $tid;

    /**
     * @description The description of the version.
     *
     * @example vc_test
     *
     * @var string
     */
    public $versionComments;
    protected $_name = [
        'dagId'           => 'DagId',
        'tid'             => 'Tid',
        'versionComments' => 'VersionComments',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->versionComments) {
            $res['VersionComments'] = $this->versionComments;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PublishAndDeployTaskFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['VersionComments'])) {
            $model->versionComments = $map['VersionComments'];
        }

        return $model;
    }
}
