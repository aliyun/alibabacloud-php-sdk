<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeOssDownloadsForSQLServerResponseBody\items;

use AlibabaCloud\Tea\Model;

class ossDownload extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $isAvail;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $bakType;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $fileSize;
    protected $_name = [
        'status'     => 'Status',
        'createTime' => 'CreateTime',
        'isAvail'    => 'IsAvail',
        'fileName'   => 'FileName',
        'bakType'    => 'BakType',
        'desc'       => 'Desc',
        'fileSize'   => 'FileSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->isAvail) {
            $res['IsAvail'] = $this->isAvail;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->bakType) {
            $res['BakType'] = $this->bakType;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ossDownload
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['IsAvail'])) {
            $model->isAvail = $map['IsAvail'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['BakType'])) {
            $model->bakType = $map['BakType'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        return $model;
    }
}
