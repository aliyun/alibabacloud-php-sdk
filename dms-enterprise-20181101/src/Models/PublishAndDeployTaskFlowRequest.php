<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class PublishAndDeployTaskFlowRequest extends Model
{
    /**
     * @var int
     */
    public $dagId;
    /**
     * @var int
     */
    public $tid;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
