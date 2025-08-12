<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;

class PutExporterOutputRequest extends Model
{
    /**
     * @var string
     */
    public $configJson;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $destName;

    /**
     * @var string
     */
    public $destType;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'configJson' => 'ConfigJson',
        'desc' => 'Desc',
        'destName' => 'DestName',
        'destType' => 'DestType',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configJson) {
            $res['ConfigJson'] = $this->configJson;
        }

        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        if (null !== $this->destName) {
            $res['DestName'] = $this->destName;
        }

        if (null !== $this->destType) {
            $res['DestType'] = $this->destType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ConfigJson'])) {
            $model->configJson = $map['ConfigJson'];
        }

        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        if (isset($map['DestName'])) {
            $model->destName = $map['DestName'];
        }

        if (isset($map['DestType'])) {
            $model->destType = $map['DestType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
