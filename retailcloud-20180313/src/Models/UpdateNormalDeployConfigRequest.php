<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\SDK\Retailcloud\V20180313\Models\UpdateNormalDeployConfigRequest\containerResourceLimit;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\UpdateNormalDeployConfigRequest\containerResourceRequest;
use AlibabaCloud\Tea\Model;

class UpdateNormalDeployConfigRequest extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var containerResourceLimit
     */
    public $containerResourceLimit;

    /**
     * @var containerResourceRequest
     */
    public $containerResourceRequest;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'appId'                    => 'AppId',
        'containerResourceLimit'   => 'ContainerResourceLimit',
        'containerResourceRequest' => 'ContainerResourceRequest',
        'id'                       => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->containerResourceLimit) {
            $res['ContainerResourceLimit'] = null !== $this->containerResourceLimit ? $this->containerResourceLimit->toMap() : null;
        }
        if (null !== $this->containerResourceRequest) {
            $res['ContainerResourceRequest'] = null !== $this->containerResourceRequest ? $this->containerResourceRequest->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateNormalDeployConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ContainerResourceLimit'])) {
            $model->containerResourceLimit = containerResourceLimit::fromMap($map['ContainerResourceLimit']);
        }
        if (isset($map['ContainerResourceRequest'])) {
            $model->containerResourceRequest = containerResourceRequest::fromMap($map['ContainerResourceRequest']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
