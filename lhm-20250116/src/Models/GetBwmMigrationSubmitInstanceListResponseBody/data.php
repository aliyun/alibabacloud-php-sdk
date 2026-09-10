<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\GetBwmMigrationSubmitInstanceListResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $gmtConvert;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $srcMetaGmtUpdate;

    /**
     * @var string
     */
    public $srcMetaInfo;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'detail' => 'detail',
        'gmtConvert' => 'gmtConvert',
        'instanceId' => 'instanceId',
        'instanceName' => 'instanceName',
        'srcMetaGmtUpdate' => 'srcMetaGmtUpdate',
        'srcMetaInfo' => 'srcMetaInfo',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detail) {
            $res['detail'] = $this->detail;
        }

        if (null !== $this->gmtConvert) {
            $res['gmtConvert'] = $this->gmtConvert;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['instanceName'] = $this->instanceName;
        }

        if (null !== $this->srcMetaGmtUpdate) {
            $res['srcMetaGmtUpdate'] = $this->srcMetaGmtUpdate;
        }

        if (null !== $this->srcMetaInfo) {
            $res['srcMetaInfo'] = $this->srcMetaInfo;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['detail'])) {
            $model->detail = $map['detail'];
        }

        if (isset($map['gmtConvert'])) {
            $model->gmtConvert = $map['gmtConvert'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['instanceName'])) {
            $model->instanceName = $map['instanceName'];
        }

        if (isset($map['srcMetaGmtUpdate'])) {
            $model->srcMetaGmtUpdate = $map['srcMetaGmtUpdate'];
        }

        if (isset($map['srcMetaInfo'])) {
            $model->srcMetaInfo = $map['srcMetaInfo'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
