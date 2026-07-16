<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListEnvironmentsResponseBody;

use AlibabaCloud\Dara\Model;

class environmentList extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $environmentName;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var int
     */
    public $preSiteVersion;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var bool
     */
    public $readOnly;

    /**
     * @var string
     */
    public $rule;

    /**
     * @var int
     */
    public $siteVersion;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'environmentName' => 'EnvironmentName',
        'isDefault' => 'IsDefault',
        'preSiteVersion' => 'PreSiteVersion',
        'priority' => 'Priority',
        'readOnly' => 'ReadOnly',
        'rule' => 'Rule',
        'siteVersion' => 'SiteVersion',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->environmentName) {
            $res['EnvironmentName'] = $this->environmentName;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->preSiteVersion) {
            $res['PreSiteVersion'] = $this->preSiteVersion;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->readOnly) {
            $res['ReadOnly'] = $this->readOnly;
        }

        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }

        if (null !== $this->siteVersion) {
            $res['SiteVersion'] = $this->siteVersion;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['EnvironmentName'])) {
            $model->environmentName = $map['EnvironmentName'];
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['PreSiteVersion'])) {
            $model->preSiteVersion = $map['PreSiteVersion'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['ReadOnly'])) {
            $model->readOnly = $map['ReadOnly'];
        }

        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }

        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
