<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendListResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendListResponseBody\backendInfoList\tags;
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

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'backendId'    => 'BackendId',
        'backendName'  => 'BackendName',
        'backendType'  => 'BackendType',
        'createdTime'  => 'CreatedTime',
        'description'  => 'Description',
        'modifiedTime' => 'ModifiedTime',
        'tags'         => 'Tags',
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
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
