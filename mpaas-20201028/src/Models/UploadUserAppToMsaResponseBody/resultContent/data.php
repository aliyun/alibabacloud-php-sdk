<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\UploadUserAppToMsaResponseBody\resultContent;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\UploadUserAppToMsaResponseBody\resultContent\data\apkInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var apkInfo
     */
    public $apkInfo;

    /**
     * @var int
     */
    public $enhanceTaskId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'apkInfo'       => 'ApkInfo',
        'enhanceTaskId' => 'EnhanceTaskId',
        'id'            => 'Id',
        'progress'      => 'Progress',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apkInfo) {
            $res['ApkInfo'] = null !== $this->apkInfo ? $this->apkInfo->toMap() : null;
        }
        if (null !== $this->enhanceTaskId) {
            $res['EnhanceTaskId'] = $this->enhanceTaskId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApkInfo'])) {
            $model->apkInfo = apkInfo::fromMap($map['ApkInfo']);
        }
        if (isset($map['EnhanceTaskId'])) {
            $model->enhanceTaskId = $map['EnhanceTaskId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
