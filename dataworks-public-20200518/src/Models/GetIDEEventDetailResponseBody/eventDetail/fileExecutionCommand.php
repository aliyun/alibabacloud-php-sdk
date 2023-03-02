<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailResponseBody\eventDetail;

use AlibabaCloud\Tea\Model;

class fileExecutionCommand extends Model
{
    /**
     * @description The code in the file of the current version.
     *
     * @example SHOW TABLES;
     *
     * @var string
     */
    public $content;

    /**
     * @description The name of the compute engine instance with which the file is associated.
     *
     * @example odps_first
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @description The ID of the file.
     *
     * @example 1234123
     *
     * @var int
     */
    public $fileId;

    /**
     * @description The type of the code in the file. Examples: 6 (Shell), 10 (ODPS SQL), 11 (ODPS MR), 23 (Data Integration), 24 (ODPS Script), 99 (zero load), 221 (PyODPS 2), 225 (ODPS Spark), 227 (EMR Hive), 228 (EMR Spark), 229 (EMR Spark SQL), 230 (EMR MR), 239 (OSS object inspection), 257 (EMR Shell), 258 (EMR Spark Shell), 259 (EMR Presto), 260 (EMR Impala), 900 (real-time sync), 1089 (cross-tenant collaboration), 1091 (Hologres development), 1093 (Hologres SQL), 1100 (assignment), and 1221 (PyODPS 3).
     *
     * @example 10
     *
     * @var int
     */
    public $fileType;
    protected $_name = [
        'content'        => 'Content',
        'dataSourceName' => 'DataSourceName',
        'fileId'         => 'FileId',
        'fileType'       => 'FileType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileExecutionCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        return $model;
    }
}
