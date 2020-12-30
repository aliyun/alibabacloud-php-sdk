<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class ListRepoBuildRecordLogRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $repoId;

    /**
     * @var string
     */
    public $buildRecordId;

    /**
     * @var int
     */
    public $offset;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'repoId'        => 'RepoId',
        'buildRecordId' => 'BuildRecordId',
        'offset'        => 'Offset',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->buildRecordId) {
            $res['BuildRecordId'] = $this->buildRecordId;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRepoBuildRecordLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['BuildRecordId'])) {
            $model->buildRecordId = $map['BuildRecordId'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }

        return $model;
    }
}
