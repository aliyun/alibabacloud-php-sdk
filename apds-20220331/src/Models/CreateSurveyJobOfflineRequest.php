<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Apds\V20220331\Models;

use AlibabaCloud\Tea\Model;

class CreateSurveyJobOfflineRequest extends Model
{
    /**
     * @description 调研渠道
     *
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $cloudType;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $objectName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'channel'    => 'channel',
        'cloudType'  => 'cloudType',
        'fileName'   => 'fileName',
        'name'       => 'name',
        'objectName' => 'objectName',
        'regionId'   => 'regionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->cloudType) {
            $res['cloudType'] = $this->cloudType;
        }
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->objectName) {
            $res['objectName'] = $this->objectName;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSurveyJobOfflineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['channel'])) {
            $model->channel = $map['channel'];
        }
        if (isset($map['cloudType'])) {
            $model->cloudType = $map['cloudType'];
        }
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['objectName'])) {
            $model->objectName = $map['objectName'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
