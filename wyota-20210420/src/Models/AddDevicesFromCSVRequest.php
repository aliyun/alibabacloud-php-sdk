<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class AddDevicesFromCSVRequest extends Model
{
    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $fileType;

    /**
     * @var int
     */
    public $seatCol;

    /**
     * @var string
     */
    public $siteId;

    /**
     * @var string
     */
    public $siteName;
    protected $_name = [
        'fileName' => 'FileName',
        'fileType' => 'FileType',
        'seatCol'  => 'SeatCol',
        'siteId'   => 'SiteId',
        'siteName' => 'SiteName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->seatCol) {
            $res['SeatCol'] = $this->seatCol;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->siteName) {
            $res['SiteName'] = $this->siteName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDevicesFromCSVRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['SeatCol'])) {
            $model->seatCol = $map['SeatCol'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['SiteName'])) {
            $model->siteName = $map['SiteName'];
        }

        return $model;
    }
}
