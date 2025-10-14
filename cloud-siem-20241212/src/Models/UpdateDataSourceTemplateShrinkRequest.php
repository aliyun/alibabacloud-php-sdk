<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class UpdateDataSourceTemplateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $autoScanNew;

    /**
     * @var bool
     */
    public $dataSourceRecognizeEnabled;

    /**
     * @var string
     */
    public $dataSourceTemplateId;

    /**
     * @var string
     */
    public $dataSourceTemplateName;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $logProjectPattern;

    /**
     * @var string
     */
    public $logRegionIds;

    /**
     * @var string
     */
    public $logStorePattern;

    /**
     * @var string
     */
    public $logUserIdsShrink;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $roleFor;
    protected $_name = [
        'autoScanNew' => 'AutoScanNew',
        'dataSourceRecognizeEnabled' => 'DataSourceRecognizeEnabled',
        'dataSourceTemplateId' => 'DataSourceTemplateId',
        'dataSourceTemplateName' => 'DataSourceTemplateName',
        'lang' => 'Lang',
        'logProjectPattern' => 'LogProjectPattern',
        'logRegionIds' => 'LogRegionIds',
        'logStorePattern' => 'LogStorePattern',
        'logUserIdsShrink' => 'LogUserIds',
        'regionId' => 'RegionId',
        'roleFor' => 'RoleFor',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoScanNew) {
            $res['AutoScanNew'] = $this->autoScanNew;
        }

        if (null !== $this->dataSourceRecognizeEnabled) {
            $res['DataSourceRecognizeEnabled'] = $this->dataSourceRecognizeEnabled;
        }

        if (null !== $this->dataSourceTemplateId) {
            $res['DataSourceTemplateId'] = $this->dataSourceTemplateId;
        }

        if (null !== $this->dataSourceTemplateName) {
            $res['DataSourceTemplateName'] = $this->dataSourceTemplateName;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->logProjectPattern) {
            $res['LogProjectPattern'] = $this->logProjectPattern;
        }

        if (null !== $this->logRegionIds) {
            $res['LogRegionIds'] = $this->logRegionIds;
        }

        if (null !== $this->logStorePattern) {
            $res['LogStorePattern'] = $this->logStorePattern;
        }

        if (null !== $this->logUserIdsShrink) {
            $res['LogUserIds'] = $this->logUserIdsShrink;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
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
        if (isset($map['AutoScanNew'])) {
            $model->autoScanNew = $map['AutoScanNew'];
        }

        if (isset($map['DataSourceRecognizeEnabled'])) {
            $model->dataSourceRecognizeEnabled = $map['DataSourceRecognizeEnabled'];
        }

        if (isset($map['DataSourceTemplateId'])) {
            $model->dataSourceTemplateId = $map['DataSourceTemplateId'];
        }

        if (isset($map['DataSourceTemplateName'])) {
            $model->dataSourceTemplateName = $map['DataSourceTemplateName'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['LogProjectPattern'])) {
            $model->logProjectPattern = $map['LogProjectPattern'];
        }

        if (isset($map['LogRegionIds'])) {
            $model->logRegionIds = $map['LogRegionIds'];
        }

        if (isset($map['LogStorePattern'])) {
            $model->logStorePattern = $map['LogStorePattern'];
        }

        if (isset($map['LogUserIds'])) {
            $model->logUserIdsShrink = $map['LogUserIds'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        return $model;
    }
}
