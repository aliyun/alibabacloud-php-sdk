<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDatasetsResponseBody\pageResult\resultData;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDatasetsResponseBody\pageResult\resultData\versionList\dataVersionConfig;

class versionList extends Model
{
    /**
     * @var string
     */
    public $creator;

    /**
     * @var dataVersionConfig
     */
    public $dataVersionConfig;

    /**
     * @var int
     */
    public $datasetId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'creator' => 'Creator',
        'dataVersionConfig' => 'DataVersionConfig',
        'datasetId' => 'DatasetId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (null !== $this->dataVersionConfig) {
            $this->dataVersionConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->dataVersionConfig) {
            $res['DataVersionConfig'] = null !== $this->dataVersionConfig ? $this->dataVersionConfig->toArray($noStream) : $this->dataVersionConfig;
        }

        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['DataVersionConfig'])) {
            $model->dataVersionConfig = dataVersionConfig::fromMap($map['DataVersionConfig']);
        }

        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
