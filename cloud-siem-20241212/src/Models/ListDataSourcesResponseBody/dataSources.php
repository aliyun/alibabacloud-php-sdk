<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataSourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataSourcesResponseBody\dataSources\dataSourceReferences;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataSourcesResponseBody\dataSources\dataSourceStores;

class dataSources extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $dataSourceFrom;

    /**
     * @var string
     */
    public $dataSourceId;

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
     * @var dataSourceReferences[]
     */
    public $dataSourceReferences;

    /**
     * @var string
     */
    public $dataSourceStatus;

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
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'dataSourceFrom' => 'DataSourceFrom',
        'dataSourceId' => 'DataSourceId',
        'dataSourceName' => 'DataSourceName',
        'dataSourceRecognizeEnabled' => 'DataSourceRecognizeEnabled',
        'dataSourceRecognizer' => 'DataSourceRecognizer',
        'dataSourceReferences' => 'DataSourceReferences',
        'dataSourceStatus' => 'DataSourceStatus',
        'dataSourceStores' => 'DataSourceStores',
        'dataSourceTemplateId' => 'DataSourceTemplateId',
        'dataSourceType' => 'DataSourceType',
        'logProjectName' => 'LogProjectName',
        'logRegionId' => 'LogRegionId',
        'logStoreName' => 'LogStoreName',
        'logUserId' => 'LogUserId',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->dataSourceReferences)) {
            Model::validateArray($this->dataSourceReferences);
        }
        if (\is_array($this->dataSourceStores)) {
            Model::validateArray($this->dataSourceStores);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dataSourceFrom) {
            $res['DataSourceFrom'] = $this->dataSourceFrom;
        }

        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
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

        if (null !== $this->dataSourceReferences) {
            if (\is_array($this->dataSourceReferences)) {
                $res['DataSourceReferences'] = [];
                $n1 = 0;
                foreach ($this->dataSourceReferences as $item1) {
                    $res['DataSourceReferences'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataSourceStatus) {
            $res['DataSourceStatus'] = $this->dataSourceStatus;
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

        if (isset($map['DataSourceFrom'])) {
            $model->dataSourceFrom = $map['DataSourceFrom'];
        }

        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
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
            if (!empty($map['DataSourceReferences'])) {
                $model->dataSourceReferences = [];
                $n1 = 0;
                foreach ($map['DataSourceReferences'] as $item1) {
                    $model->dataSourceReferences[$n1] = dataSourceReferences::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DataSourceStatus'])) {
            $model->dataSourceStatus = $map['DataSourceStatus'];
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

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
