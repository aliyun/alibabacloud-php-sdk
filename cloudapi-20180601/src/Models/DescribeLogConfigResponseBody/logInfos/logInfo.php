<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeLogConfigResponseBody\logInfos;

use AlibabaCloud\Tea\Model;

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
        'logType'     => 'LogType',
        'regionId'    => 'RegionId',
        'slsLogStore' => 'SlsLogStore',
        'slsProject'  => 'SlsProject',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return logInfo
     */
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
