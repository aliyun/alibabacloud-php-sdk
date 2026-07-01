<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDatasetsResponseBody\pageResult\resultData\versionList\dataVersionConfig;

use AlibabaCloud\Dara\Model;

class fileStorageConfig extends Model
{
    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $dataSourceName;

    /**
     * @var string
     */
    public $devPath;

    /**
     * @var string
     */
    public $mountPath;

    /**
     * @var string
     */
    public $prodPath;
    protected $_name = [
        'dataSourceId' => 'DataSourceId',
        'dataSourceName' => 'DataSourceName',
        'devPath' => 'DevPath',
        'mountPath' => 'MountPath',
        'prodPath' => 'ProdPath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }

        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }

        if (null !== $this->devPath) {
            $res['DevPath'] = $this->devPath;
        }

        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }

        if (null !== $this->prodPath) {
            $res['ProdPath'] = $this->prodPath;
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
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }

        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }

        if (isset($map['DevPath'])) {
            $model->devPath = $map['DevPath'];
        }

        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }

        if (isset($map['ProdPath'])) {
            $model->prodPath = $map['ProdPath'];
        }

        return $model;
    }
}
