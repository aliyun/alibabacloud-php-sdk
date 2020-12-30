<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\ListDataSetResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $versionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $gmtModified;
    protected $_name = [
        'state'       => 'State',
        'gmtCreate'   => 'GmtCreate',
        'versionId'   => 'VersionId',
        'instanceId'  => 'InstanceId',
        'gmtModified' => 'GmtModified',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        return $model;
    }
}
