<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeLogConfigResponseBody\logInfos;

use AlibabaCloud\Tea\Model;

class logInfo extends Model
{
    /**
     * @var string
     */
    public $slsLogStore;

    /**
     * @var string
     */
    public $logType;

    /**
     * @var string
     */
    public $slsProject;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'slsLogStore' => 'SlsLogStore',
        'logType'     => 'LogType',
        'slsProject'  => 'SlsProject',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->slsLogStore) {
            $res['SlsLogStore'] = $this->slsLogStore;
        }
        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }
        if (null !== $this->slsProject) {
            $res['SlsProject'] = $this->slsProject;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SlsLogStore'])) {
            $model->slsLogStore = $map['SlsLogStore'];
        }
        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }
        if (isset($map['SlsProject'])) {
            $model->slsProject = $map['SlsProject'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
