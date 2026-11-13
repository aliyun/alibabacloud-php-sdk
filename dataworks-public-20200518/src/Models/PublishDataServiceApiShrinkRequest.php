<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class PublishDataServiceApiShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $apiId;

    /**
     * @var string
     */
    public $apigwDomainIdsShrink;

    /**
     * @var string
     */
    public $apigwInstanceId;

    /**
     * @var string
     */
    public $apigwService;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'apiId' => 'ApiId',
        'apigwDomainIdsShrink' => 'ApigwDomainIds',
        'apigwInstanceId' => 'ApigwInstanceId',
        'apigwService' => 'ApigwService',
        'projectId' => 'ProjectId',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }

        if (null !== $this->apigwDomainIdsShrink) {
            $res['ApigwDomainIds'] = $this->apigwDomainIdsShrink;
        }

        if (null !== $this->apigwInstanceId) {
            $res['ApigwInstanceId'] = $this->apigwInstanceId;
        }

        if (null !== $this->apigwService) {
            $res['ApigwService'] = $this->apigwService;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }

        if (isset($map['ApigwDomainIds'])) {
            $model->apigwDomainIdsShrink = $map['ApigwDomainIds'];
        }

        if (isset($map['ApigwInstanceId'])) {
            $model->apigwInstanceId = $map['ApigwInstanceId'];
        }

        if (isset($map['ApigwService'])) {
            $model->apigwService = $map['ApigwService'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
