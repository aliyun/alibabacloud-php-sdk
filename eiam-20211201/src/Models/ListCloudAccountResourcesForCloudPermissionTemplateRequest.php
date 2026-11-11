<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class ListCloudAccountResourcesForCloudPermissionTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $cloudAccountId;

    /**
     * @var string
     */
    public $cloudAccountResourceEntityType;

    /**
     * @var string
     */
    public $cloudPermissionTemplateId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'cloudAccountId' => 'CloudAccountId',
        'cloudAccountResourceEntityType' => 'CloudAccountResourceEntityType',
        'cloudPermissionTemplateId' => 'CloudPermissionTemplateId',
        'instanceId' => 'InstanceId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudAccountId) {
            $res['CloudAccountId'] = $this->cloudAccountId;
        }

        if (null !== $this->cloudAccountResourceEntityType) {
            $res['CloudAccountResourceEntityType'] = $this->cloudAccountResourceEntityType;
        }

        if (null !== $this->cloudPermissionTemplateId) {
            $res['CloudPermissionTemplateId'] = $this->cloudPermissionTemplateId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['CloudAccountId'])) {
            $model->cloudAccountId = $map['CloudAccountId'];
        }

        if (isset($map['CloudAccountResourceEntityType'])) {
            $model->cloudAccountResourceEntityType = $map['CloudAccountResourceEntityType'];
        }

        if (isset($map['CloudPermissionTemplateId'])) {
            $model->cloudPermissionTemplateId = $map['CloudPermissionTemplateId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
