<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class AddDataSourceRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $dataSourceName;

    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $fileRetentionDays;
    protected $_name = [
        'corpId'            => 'CorpId',
        'dataSourceName'    => 'DataSourceName',
        'dataSourceType'    => 'DataSourceType',
        'description'       => 'Description',
        'fileRetentionDays' => 'FileRetentionDays',
    ];

    public function validate()
    {
        Model::validateRequired('corpId', $this->corpId, true);
        Model::validateRequired('dataSourceName', $this->dataSourceName, true);
        Model::validateRequired('dataSourceType', $this->dataSourceType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileRetentionDays) {
            $res['FileRetentionDays'] = $this->fileRetentionDays;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDataSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileRetentionDays'])) {
            $model->fileRetentionDays = $map['FileRetentionDays'];
        }

        return $model;
    }
}
