<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels;
use AlibabaCloud\Tea\Model;

class backendInfo extends Model
{
    /**
     * @var string
     */
    public $backendId;

    /**
     * @var backendModels[]
     */
    public $backendModels;

    /**
     * @var string
     */
    public $backendName;

    /**
     * @var string
     */
    public $backendType;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
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
