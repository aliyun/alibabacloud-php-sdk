<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class TensorboardDataSourceSpec extends Model
{
    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var string
     */
    public $directoryName;

    /**
     * @var string
     */
    public $fullSummaryPath;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $summaryPath;

    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'dataSourceType' => 'DataSourceType',
        'directoryName' => 'DirectoryName',
        'fullSummaryPath' => 'FullSummaryPath',
        'id' => 'Id',
        'name' => 'Name',
        'sourceType' => 'SourceType',
        'summaryPath' => 'SummaryPath',
        'uri' => 'Uri',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }

        if (null !== $this->directoryName) {
            $res['DirectoryName'] = $this->directoryName;
        }

        if (null !== $this->fullSummaryPath) {
            $res['FullSummaryPath'] = $this->fullSummaryPath;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->summaryPath) {
            $res['SummaryPath'] = $this->summaryPath;
        }

        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
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
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }

        if (isset($map['DirectoryName'])) {
            $model->directoryName = $map['DirectoryName'];
        }

        if (isset($map['FullSummaryPath'])) {
            $model->fullSummaryPath = $map['FullSummaryPath'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['SummaryPath'])) {
            $model->summaryPath = $map['SummaryPath'];
        }

        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
