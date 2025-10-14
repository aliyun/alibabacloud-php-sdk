<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataSourceTemplatesResponseBody;

use AlibabaCloud\Dara\Model;

class dataSourceTemplates extends Model
{
    /**
     * @var string
     */
    public $autoScanNew;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $dataSourceFrom;

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
    public $dataSourceTemplateId;

    /**
     * @var string
     */
    public $dataSourceTemplateName;

    /**
     * @var string
     */
    public $logProjectPattern;

    /**
     * @var string[]
     */
    public $logRegionIds;

    /**
     * @var string
     */
    public $logStorePattern;

    /**
     * @var string[]
     */
    public $logUserIds;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'autoScanNew' => 'AutoScanNew',
        'createTime' => 'CreateTime',
        'dataSourceFrom' => 'DataSourceFrom',
        'dataSourceRecognizeEnabled' => 'DataSourceRecognizeEnabled',
        'dataSourceRecognizer' => 'DataSourceRecognizer',
        'dataSourceTemplateId' => 'DataSourceTemplateId',
        'dataSourceTemplateName' => 'DataSourceTemplateName',
        'logProjectPattern' => 'LogProjectPattern',
        'logRegionIds' => 'LogRegionIds',
        'logStorePattern' => 'LogStorePattern',
        'logUserIds' => 'LogUserIds',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->logRegionIds)) {
            Model::validateArray($this->logRegionIds);
        }
        if (\is_array($this->logUserIds)) {
            Model::validateArray($this->logUserIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoScanNew) {
            $res['AutoScanNew'] = $this->autoScanNew;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dataSourceFrom) {
            $res['DataSourceFrom'] = $this->dataSourceFrom;
        }

        if (null !== $this->dataSourceRecognizeEnabled) {
            $res['DataSourceRecognizeEnabled'] = $this->dataSourceRecognizeEnabled;
        }

        if (null !== $this->dataSourceRecognizer) {
            $res['DataSourceRecognizer'] = $this->dataSourceRecognizer;
        }

        if (null !== $this->dataSourceTemplateId) {
            $res['DataSourceTemplateId'] = $this->dataSourceTemplateId;
        }

        if (null !== $this->dataSourceTemplateName) {
            $res['DataSourceTemplateName'] = $this->dataSourceTemplateName;
        }

        if (null !== $this->logProjectPattern) {
            $res['LogProjectPattern'] = $this->logProjectPattern;
        }

        if (null !== $this->logRegionIds) {
            if (\is_array($this->logRegionIds)) {
                $res['LogRegionIds'] = [];
                $n1 = 0;
                foreach ($this->logRegionIds as $item1) {
                    $res['LogRegionIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->logStorePattern) {
            $res['LogStorePattern'] = $this->logStorePattern;
        }

        if (null !== $this->logUserIds) {
            if (\is_array($this->logUserIds)) {
                $res['LogUserIds'] = [];
                $n1 = 0;
                foreach ($this->logUserIds as $item1) {
                    $res['LogUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AutoScanNew'])) {
            $model->autoScanNew = $map['AutoScanNew'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DataSourceFrom'])) {
            $model->dataSourceFrom = $map['DataSourceFrom'];
        }

        if (isset($map['DataSourceRecognizeEnabled'])) {
            $model->dataSourceRecognizeEnabled = $map['DataSourceRecognizeEnabled'];
        }

        if (isset($map['DataSourceRecognizer'])) {
            $model->dataSourceRecognizer = $map['DataSourceRecognizer'];
        }

        if (isset($map['DataSourceTemplateId'])) {
            $model->dataSourceTemplateId = $map['DataSourceTemplateId'];
        }

        if (isset($map['DataSourceTemplateName'])) {
            $model->dataSourceTemplateName = $map['DataSourceTemplateName'];
        }

        if (isset($map['LogProjectPattern'])) {
            $model->logProjectPattern = $map['LogProjectPattern'];
        }

        if (isset($map['LogRegionIds'])) {
            if (!empty($map['LogRegionIds'])) {
                $model->logRegionIds = [];
                $n1 = 0;
                foreach ($map['LogRegionIds'] as $item1) {
                    $model->logRegionIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LogStorePattern'])) {
            $model->logStorePattern = $map['LogStorePattern'];
        }

        if (isset($map['LogUserIds'])) {
            if (!empty($map['LogUserIds'])) {
                $model->logUserIds = [];
                $n1 = 0;
                foreach ($map['LogUserIds'] as $item1) {
                    $model->logUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
