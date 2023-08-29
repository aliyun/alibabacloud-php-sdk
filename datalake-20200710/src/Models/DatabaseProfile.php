<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class DatabaseProfile extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $fileCnt;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var string
     */
    public $latestDate;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $objectCnt;

    /**
     * @var int
     */
    public $objectSize;
    protected $_name = [
        'createTime' => 'CreateTime',
        'fileCnt'    => 'FileCnt',
        'fileSize'   => 'FileSize',
        'latestDate' => 'LatestDate',
        'location'   => 'Location',
        'name'       => 'Name',
        'objectCnt'  => 'ObjectCnt',
        'objectSize' => 'ObjectSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->fileCnt) {
            $res['FileCnt'] = $this->fileCnt;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->latestDate) {
            $res['LatestDate'] = $this->latestDate;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->objectCnt) {
            $res['ObjectCnt'] = $this->objectCnt;
        }
        if (null !== $this->objectSize) {
            $res['ObjectSize'] = $this->objectSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DatabaseProfile
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FileCnt'])) {
            $model->fileCnt = $map['FileCnt'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['LatestDate'])) {
            $model->latestDate = $map['LatestDate'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ObjectCnt'])) {
            $model->objectCnt = $map['ObjectCnt'];
        }
        if (isset($map['ObjectSize'])) {
            $model->objectSize = $map['ObjectSize'];
        }

        return $model;
    }
}
