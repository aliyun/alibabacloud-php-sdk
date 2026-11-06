<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class ListCloudPermissionTemplatesRequest extends Model
{
    /**
     * @var string
     */
    public $cloudAccountId;

    /**
     * @var string
     */
    public $cloudPermissionTemplateNamePrefix;

    /**
     * @var string
     */
    public $cloudPermissionTemplateSharingMode;

    /**
     * @var string
     */
    public $cloudPermissionTemplateUsageType;

    /**
     * @var string
     */
    public $creatorType;

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
        'cloudPermissionTemplateNamePrefix' => 'CloudPermissionTemplateNamePrefix',
        'cloudPermissionTemplateSharingMode' => 'CloudPermissionTemplateSharingMode',
        'cloudPermissionTemplateUsageType' => 'CloudPermissionTemplateUsageType',
        'creatorType' => 'CreatorType',
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

        if (null !== $this->cloudPermissionTemplateNamePrefix) {
            $res['CloudPermissionTemplateNamePrefix'] = $this->cloudPermissionTemplateNamePrefix;
        }

        if (null !== $this->cloudPermissionTemplateSharingMode) {
            $res['CloudPermissionTemplateSharingMode'] = $this->cloudPermissionTemplateSharingMode;
        }

        if (null !== $this->cloudPermissionTemplateUsageType) {
            $res['CloudPermissionTemplateUsageType'] = $this->cloudPermissionTemplateUsageType;
        }

        if (null !== $this->creatorType) {
            $res['CreatorType'] = $this->creatorType;
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

        if (isset($map['CloudPermissionTemplateNamePrefix'])) {
            $model->cloudPermissionTemplateNamePrefix = $map['CloudPermissionTemplateNamePrefix'];
        }

        if (isset($map['CloudPermissionTemplateSharingMode'])) {
            $model->cloudPermissionTemplateSharingMode = $map['CloudPermissionTemplateSharingMode'];
        }

        if (isset($map['CloudPermissionTemplateUsageType'])) {
            $model->cloudPermissionTemplateUsageType = $map['CloudPermissionTemplateUsageType'];
        }

        if (isset($map['CreatorType'])) {
            $model->creatorType = $map['CreatorType'];
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
