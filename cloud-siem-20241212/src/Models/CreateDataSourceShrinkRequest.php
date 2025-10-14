<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateDataSourceShrinkRequest\dataSourceStores;

class CreateDataSourceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dataSourceFrom;

    /**
     * @var string
     */
    public $dataSourceIdsShrink;

    /**
     * @var string
     */
    public $dataSourceName;

    /**
     * @var bool
     */
    public $dataSourceRecognizeEnabled;

    /**
     * @var string
     */
    public $dataSourceRecognizer;

    /**
     * @var string
     */
    public $dataSourceReferencesShrink;

    /**
     * @var dataSourceStores[]
     */
    public $dataSourceStores;

    /**
     * @var string
     */
    public $dataSourceTemplateId;

    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $logProjectName;

    /**
     * @var string
     */
    public $logRegionId;

    /**
     * @var string
     */
    public $logStoreName;

    /**
     * @var int
     */
    public $logUserId;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $roleFor;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'dataSourceFrom' => 'DataSourceFrom',
        'dataSourceIdsShrink' => 'DataSourceIds',
        'dataSourceName' => 'DataSourceName',
        'dataSourceRecognizeEnabled' => 'DataSourceRecognizeEnabled',
        'dataSourceRecognizer' => 'DataSourceRecognizer',
        'dataSourceReferencesShrink' => 'DataSourceReferences',
        'dataSourceStores' => 'DataSourceStores',
        'dataSourceTemplateId' => 'DataSourceTemplateId',
        'dataSourceType' => 'DataSourceType',
        'lang' => 'Lang',
        'logProjectName' => 'LogProjectName',
        'logRegionId' => 'LogRegionId',
        'logStoreName' => 'LogStoreName',
        'logUserId' => 'LogUserId',
        'order' => 'Order',
        'regionId' => 'RegionId',
        'roleFor' => 'RoleFor',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->dataSourceStores)) {
            Model::validateArray($this->dataSourceStores);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceFrom) {
            $res['DataSourceFrom'] = $this->dataSourceFrom;
        }

        if (null !== $this->dataSourceIdsShrink) {
            $res['DataSourceIds'] = $this->dataSourceIdsShrink;
        }

        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }

        if (null !== $this->dataSourceRecognizeEnabled) {
            $res['DataSourceRecognizeEnabled'] = $this->dataSourceRecognizeEnabled;
        }

        if (null !== $this->dataSourceRecognizer) {
            $res['DataSourceRecognizer'] = $this->dataSourceRecognizer;
        }

        if (null !== $this->dataSourceReferencesShrink) {
            $res['DataSourceReferences'] = $this->dataSourceReferencesShrink;
        }

        if (null !== $this->dataSourceStores) {
            if (\is_array($this->dataSourceStores)) {
                $res['DataSourceStores'] = [];
                $n1 = 0;
                foreach ($this->dataSourceStores as $item1) {
                    $res['DataSourceStores'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataSourceTemplateId) {
            $res['DataSourceTemplateId'] = $this->dataSourceTemplateId;
        }

        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->logProjectName) {
            $res['LogProjectName'] = $this->logProjectName;
        }

        if (null !== $this->logRegionId) {
            $res['LogRegionId'] = $this->logRegionId;
        }

        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }

        if (null !== $this->logUserId) {
            $res['LogUserId'] = $this->logUserId;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
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
        if (isset($map['DataSourceFrom'])) {
            $model->dataSourceFrom = $map['DataSourceFrom'];
        }

        if (isset($map['DataSourceIds'])) {
            $model->dataSourceIdsShrink = $map['DataSourceIds'];
        }

        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }

        if (isset($map['DataSourceRecognizeEnabled'])) {
            $model->dataSourceRecognizeEnabled = $map['DataSourceRecognizeEnabled'];
        }

        if (isset($map['DataSourceRecognizer'])) {
            $model->dataSourceRecognizer = $map['DataSourceRecognizer'];
        }

        if (isset($map['DataSourceReferences'])) {
            $model->dataSourceReferencesShrink = $map['DataSourceReferences'];
        }

        if (isset($map['DataSourceStores'])) {
            if (!empty($map['DataSourceStores'])) {
                $model->dataSourceStores = [];
                $n1 = 0;
                foreach ($map['DataSourceStores'] as $item1) {
                    $model->dataSourceStores[$n1] = dataSourceStores::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DataSourceTemplateId'])) {
            $model->dataSourceTemplateId = $map['DataSourceTemplateId'];
        }

        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['LogProjectName'])) {
            $model->logProjectName = $map['LogProjectName'];
        }

        if (isset($map['LogRegionId'])) {
            $model->logRegionId = $map['LogRegionId'];
        }

        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }

        if (isset($map['LogUserId'])) {
            $model->logUserId = $map['LogUserId'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
