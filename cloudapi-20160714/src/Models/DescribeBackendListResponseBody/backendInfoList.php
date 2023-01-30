<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendListResponseBody;

use AlibabaCloud\Tea\Model;

class backendInfoList extends Model
{
    /**
     * @description The ID of the backend service.
     *
     * @example 35bd31d32c9c425ebbe9330db9f8c375
     *
     * @var string
     */
    public $backendId;

    /**
     * @description The name of the backend service.
     *
     * @example test
     *
     * @var string
     */
    public $backendName;

    /**
     * @description The type of the backend service.
     *
     * @example HTTP
     *
     * @var string
     */
    public $backendType;

    /**
     * @description The time when the backend service was created.
     *
     * @example 2022-01-25T11:22:29Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The description of the backend service.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the backend service was modified.
     *
     * @example 2022-01-25T11:22:29Z
     *
     * @var string
     */
    public $modifiedTime;
    protected $_name = [
        'backendId'    => 'BackendId',
        'backendName'  => 'BackendName',
        'backendType'  => 'BackendType',
        'createdTime'  => 'CreatedTime',
        'description'  => 'Description',
        'modifiedTime' => 'ModifiedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendId) {
            $res['BackendId'] = $this->backendId;
        }
        if (null !== $this->backendName) {
            $res['BackendName'] = $this->backendName;
        }
        if (null !== $this->backendType) {
            $res['BackendType'] = $this->backendType;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backendInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendId'])) {
            $model->backendId = $map['BackendId'];
        }
        if (isset($map['BackendName'])) {
            $model->backendName = $map['BackendName'];
        }
        if (isset($map['BackendType'])) {
            $model->backendType = $map['BackendType'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        return $model;
    }
}
