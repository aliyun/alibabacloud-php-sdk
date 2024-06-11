<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214\Models;

use AlibabaCloud\Tea\Model;

class DeleteSymRecordsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $appVersions;

    /**
     * @description This parameter is required.
     *
     * @example 5fb6001a73749c24fd9cb356
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $fileType;
    protected $_name = [
        'appVersions'  => 'appVersions',
        'dataSourceId' => 'dataSourceId',
        'fileType'     => 'fileType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appVersions) {
            $res['appVersions'] = $this->appVersions;
        }
        if (null !== $this->dataSourceId) {
            $res['dataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->fileType) {
            $res['fileType'] = $this->fileType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSymRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appVersions'])) {
            if (!empty($map['appVersions'])) {
                $model->appVersions = $map['appVersions'];
            }
        }
        if (isset($map['dataSourceId'])) {
            $model->dataSourceId = $map['dataSourceId'];
        }
        if (isset($map['fileType'])) {
            $model->fileType = $map['fileType'];
        }

        return $model;
    }
}
