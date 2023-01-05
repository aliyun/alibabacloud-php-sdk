<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryLocalFileUploadJobResponseBody\data\resultList;

use AlibabaCloud\Tea\Model;

class fileList extends Model
{
    /**
     * @example 1634746054
     *
     * @var int
     */
    public $fileEndTime;

    /**
     * @example video1
     *
     * @var string
     */
    public $fileName;

    /**
     * @example 1634747054
     *
     * @var int
     */
    public $fileStartTime;
    protected $_name = [
        'fileEndTime'   => 'FileEndTime',
        'fileName'      => 'FileName',
        'fileStartTime' => 'FileStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileEndTime) {
            $res['FileEndTime'] = $this->fileEndTime;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileStartTime) {
            $res['FileStartTime'] = $this->fileStartTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileEndTime'])) {
            $model->fileEndTime = $map['FileEndTime'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileStartTime'])) {
            $model->fileStartTime = $map['FileStartTime'];
        }

        return $model;
    }
}
