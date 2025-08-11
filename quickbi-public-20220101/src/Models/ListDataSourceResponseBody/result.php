<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListDataSourceResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $datasourceId;

    /**
     * @var string
     */
    public $dsType;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $parentDsType;

    /**
     * @var string
     */
    public $showName;
    protected $_name = [
        'creatorId' => 'CreatorId',
        'creatorName' => 'CreatorName',
        'datasourceId' => 'DatasourceId',
        'dsType' => 'DsType',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'parentDsType' => 'ParentDsType',
        'showName' => 'ShowName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }

        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }

        if (null !== $this->datasourceId) {
            $res['DatasourceId'] = $this->datasourceId;
        }

        if (null !== $this->dsType) {
            $res['DsType'] = $this->dsType;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->parentDsType) {
            $res['ParentDsType'] = $this->parentDsType;
        }

        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
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
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }

        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }

        if (isset($map['DatasourceId'])) {
            $model->datasourceId = $map['DatasourceId'];
        }

        if (isset($map['DsType'])) {
            $model->dsType = $map['DsType'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['ParentDsType'])) {
            $model->parentDsType = $map['ParentDsType'];
        }

        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }

        return $model;
    }
}
