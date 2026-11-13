<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class PublishDataServiceApiRequest extends Model
{
    /**
     * @var int
     */
    public $apiId;

    /**
     * @var string[]
     */
    public $apigwDomainIds;

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
        'apigwDomainIds' => 'ApigwDomainIds',
        'apigwInstanceId' => 'ApigwInstanceId',
        'apigwService' => 'ApigwService',
        'projectId' => 'ProjectId',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        if (\is_array($this->apigwDomainIds)) {
            Model::validateArray($this->apigwDomainIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }

        if (null !== $this->apigwDomainIds) {
            if (\is_array($this->apigwDomainIds)) {
                $res['ApigwDomainIds'] = [];
                $n1 = 0;
                foreach ($this->apigwDomainIds as $item1) {
                    $res['ApigwDomainIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['ApigwDomainIds'])) {
                $model->apigwDomainIds = [];
                $n1 = 0;
                foreach ($map['ApigwDomainIds'] as $item1) {
                    $model->apigwDomainIds[$n1] = $item1;
                    ++$n1;
                }
            }
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
