<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailResponseBody\eventDetail;

use AlibabaCloud\Dara\Model;

class fileExecutionCommand extends Model
{
    /**
     * @var string
     */
    public $content;
    /**
     * @var string
     */
    public $dataSourceName;
    /**
     * @var int
     */
    public $fileId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
