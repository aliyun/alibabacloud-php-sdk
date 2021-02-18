<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Geoip\V20200101\Models\DescribeGeoipInstanceDataInfosResponseBody\dataInfos;

use AlibabaCloud\Tea\Model;

class dataInfo extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $updateTimestamp;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $version;

    /**
     * @var int
     */
    public $downloadCount;
    protected $_name = [
        'type'            => 'Type',
        'updateTimestamp' => 'UpdateTimestamp',
        'updateTime'      => 'UpdateTime',
        'version'         => 'Version',
        'downloadCount'   => 'DownloadCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->downloadCount) {
            $res['DownloadCount'] = $this->downloadCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['DownloadCount'])) {
            $model->downloadCount = $map['DownloadCount'];
        }

        return $model;
    }
}
