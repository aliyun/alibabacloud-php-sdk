<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class PublishAndDeployTaskFlowRequest extends Model
{
    /**
     * @description The ID of the task flow. You can call the [ListTaskFlow](~~424565~~) or [ListLhTaskFlowAndScenario](~~426672~~) operation to query the task flow ID.
     *
     * @example The description of the version.
     *
     * @var int
     */
    public $dagId;

    /**
     * @description The response parameters.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;

    /**
     * @description The error code returned if the request failed.
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
