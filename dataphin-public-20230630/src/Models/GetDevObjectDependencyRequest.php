<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class GetDevObjectDependencyRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example DATA_PROCESS
     *
     * @var string
     */
    public $objectFrom;

    /**
     * @description This parameter is required.
     *
     * @example 7026498387616064
     *
     * @var string
     */
    public $objectId;

    /**
     * @description This parameter is required.
     *
     * @example 7026498387616064
     *
     * @var string
     */
    public $objectType;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;

    /**
     * @description This parameter is required.
     *
     * @example 7021037162911616L
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'objectFrom' => 'ObjectFrom',
        'objectId' => 'ObjectId',
        'objectType' => 'ObjectType',
        'opTenantId' => 'OpTenantId',
        'projectId' => 'ProjectId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->objectFrom) {
            $res['ObjectFrom'] = $this->objectFrom;
        }
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDevObjectDependencyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ObjectFrom'])) {
            $model->objectFrom = $map['ObjectFrom'];
        }
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
