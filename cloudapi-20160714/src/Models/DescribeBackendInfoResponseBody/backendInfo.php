<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels;
use AlibabaCloud\Tea\Model;

class backendInfo extends Model
{
    /**
     * @description The ID of the backend service.
     *
     * @example 6fc978bb63574146b766863dd7bdf661
     *
     * @var string
     */
    public $backendId;

    /**
     * @description The configurations of the backend service in the environment.
     *
     * @var backendModels[]
     */
    public $backendModels;

    /**
     * @description The name of the backend service.
     *
     * @example testoss2
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
     * @example 2021-11-22T11:10:46+08:00
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The description of the backend service.
     *
     * @example add
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the backend service was modified.
     *
     * @example 2017-12-11T15:18:09+08:00
     *
     * @var string
     */
    public $modifiedTime;
    protected $_name = [
        'backendId'     => 'BackendId',
        'backendModels' => 'BackendModels',
        'backendName'   => 'BackendName',
        'backendType'   => 'BackendType',
        'createdTime'   => 'CreatedTime',
        'description'   => 'Description',
        'modifiedTime'  => 'ModifiedTime',
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
        if (null !== $this->backendModels) {
            $res['BackendModels'] = [];
            if (null !== $this->backendModels && \is_array($this->backendModels)) {
                $n = 0;
                foreach ($this->backendModels as $item) {
                    $res['BackendModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return backendInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendId'])) {
            $model->backendId = $map['BackendId'];
        }
        if (isset($map['BackendModels'])) {
            if (!empty($map['BackendModels'])) {
                $model->backendModels = [];
                $n                    = 0;
                foreach ($map['BackendModels'] as $item) {
                    $model->backendModels[$n++] = null !== $item ? backendModels::fromMap($item) : $item;
                }
            }
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
