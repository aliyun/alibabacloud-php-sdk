<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class AddWatermarkRequest extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $watermarkConfig;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $appId;
    protected $_name = [
        'type'            => 'Type',
        'name'            => 'Name',
        'watermarkConfig' => 'WatermarkConfig',
        'fileUrl'         => 'FileUrl',
        'appId'           => 'AppId',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->watermarkConfig) {
            $res['WatermarkConfig'] = $this->watermarkConfig;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddWatermarkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['WatermarkConfig'])) {
            $model->watermarkConfig = $map['WatermarkConfig'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        return $model;
    }
}
