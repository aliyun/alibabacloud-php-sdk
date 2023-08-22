<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class ListRepoBuildRecordLogRequest extends Model
{
    /**
     * @description The ID of the image building record.
     *
     * @example C5B4D5D7-A1C6-4E9B-ABD2-401361C4****
     *
     * @var string
     */
    public $buildRecordId;

    /**
     * @description The ID of the instance.
     *
     * @example cri-nmbv37dlv5d3****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The offset of log lines.
     *
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @description The ID of the image repository.
     *
     * @example crr-z4dvahhku9wv4****
     *
     * @var string
     */
    public $repoId;
    protected $_name = [
        'buildRecordId' => 'BuildRecordId',
        'instanceId'    => 'InstanceId',
        'offset'        => 'Offset',
        'repoId'        => 'RepoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildRecordId) {
            $res['BuildRecordId'] = $this->buildRecordId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
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
        if (isset($map['BuildRecordId'])) {
            $model->buildRecordId = $map['BuildRecordId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }

        return $model;
    }
}
