<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeLogConfigResponseBody\logInfos;

use AlibabaCloud\Dara\Model;

class logInfo extends Model
{
    /**
     * @var string
     */
    public $logType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $slsLogStore;

    /**
     * @var string
     */
    public $slsProject;
    protected $_name = [
        'logType' => 'LogType',
        'regionId' => 'RegionId',
        'slsLogStore' => 'SlsLogStore',
        'slsProject' => 'SlsProject',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->slsLogStore) {
            $res['SlsLogStore'] = $this->slsLogStore;
        }

        if (null !== $this->slsProject) {
            $res['SlsProject'] = $this->slsProject;
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
        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SlsLogStore'])) {
            $model->slsLogStore = $map['SlsLogStore'];
        }

        if (isset($map['SlsProject'])) {
            $model->slsProject = $map['SlsProject'];
        }

        return $model;
    }
}
