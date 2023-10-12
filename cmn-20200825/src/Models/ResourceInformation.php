<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ResourceInformation\information;
use AlibabaCloud\Tea\Model;

class ResourceInformation extends Model
{
    /**
     * @example architectureId
     *
     * @var string
     */
    public $architectureId;

    /**
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $createTime;

    /**
     * @var information[]
     */
    public $information;

    /**
     * @example 6510
     *
     * @var string
     */
    public $resourceAttribute;

    /**
     * @var string
     */
    public $resourceInformationId;

    /**
     * @example CMDB
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example adaieaoweif_s3834
     *
     * @var string
     */
    public $setupProjectId;

    /**
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'architectureId'        => 'ArchitectureId',
        'createTime'            => 'CreateTime',
        'information'           => 'Information',
        'resourceAttribute'     => 'ResourceAttribute',
        'resourceInformationId' => 'ResourceInformationId',
        'resourceType'          => 'ResourceType',
        'setupProjectId'        => 'SetupProjectId',
        'updateTime'            => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architectureId) {
            $res['ArchitectureId'] = $this->architectureId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->information) {
            $res['Information'] = [];
            if (null !== $this->information && \is_array($this->information)) {
                $n = 0;
                foreach ($this->information as $item) {
                    $res['Information'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceAttribute) {
            $res['ResourceAttribute'] = $this->resourceAttribute;
        }
        if (null !== $this->resourceInformationId) {
            $res['ResourceInformationId'] = $this->resourceInformationId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->setupProjectId) {
            $res['SetupProjectId'] = $this->setupProjectId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResourceInformation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchitectureId'])) {
            $model->architectureId = $map['ArchitectureId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Information'])) {
            if (!empty($map['Information'])) {
                $model->information = [];
                $n                  = 0;
                foreach ($map['Information'] as $item) {
                    $model->information[$n++] = null !== $item ? information::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceAttribute'])) {
            $model->resourceAttribute = $map['ResourceAttribute'];
        }
        if (isset($map['ResourceInformationId'])) {
            $model->resourceInformationId = $map['ResourceInformationId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['SetupProjectId'])) {
            $model->setupProjectId = $map['SetupProjectId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
