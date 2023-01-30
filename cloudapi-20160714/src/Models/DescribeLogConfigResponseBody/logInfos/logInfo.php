<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeLogConfigResponseBody\logInfos;

use AlibabaCloud\Tea\Model;

class logInfo extends Model
{
    /**
     * @description The log type.
     *
     * @example PROVIDER
     *
     * @var string
     */
    public $logType;

    /**
     * @description The region ID of Log Service.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The log store value of Log Service (SLS).
     *
     * @example slsstore
     *
     * @var string
     */
    public $slsLogStore;

    /**
     * @description The SLS project.
     *
     * @example slsproject
     *
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
