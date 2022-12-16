<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailResponseBody\eventDetail;

use AlibabaCloud\Tea\Model;

class fileExecutionCommand extends Model
{
    /**
     * @example SHOW TABLES;
     *
     * @var string
     */
    public $content;

    /**
     * @example odps_first
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @example 1234123
     *
     * @var int
     */
    public $fileId;

    /**
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
