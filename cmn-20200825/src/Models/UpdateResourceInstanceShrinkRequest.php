<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class UpdateResourceInstanceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $resourceInformationShrink;

    /**
     * @var string
     */
    public $resourceInformationId;

    /**
     * @example adaieaoweif_s3834
     *
     * @var string
     */
    public $setupProjectId;
    protected $_name = [
        'instanceId'                => 'InstanceId',
        'resourceInformationShrink' => 'ResourceInformation',
        'resourceInformationId'     => 'ResourceInformationId',
        'setupProjectId'            => 'SetupProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->resourceInformationShrink) {
            $res['ResourceInformation'] = $this->resourceInformationShrink;
        }
        if (null !== $this->resourceInformationId) {
            $res['ResourceInformationId'] = $this->resourceInformationId;
        }
        if (null !== $this->setupProjectId) {
            $res['SetupProjectId'] = $this->setupProjectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateResourceInstanceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ResourceInformation'])) {
            $model->resourceInformationShrink = $map['ResourceInformation'];
        }
        if (isset($map['ResourceInformationId'])) {
            $model->resourceInformationId = $map['ResourceInformationId'];
        }
        if (isset($map['SetupProjectId'])) {
            $model->setupProjectId = $map['SetupProjectId'];
        }

        return $model;
    }
}
