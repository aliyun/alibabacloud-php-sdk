<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Tea\Model;

class AddLogMaskConfigRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $maskName;

    /**
     * @var string
     */
    public $maskRegex;

    /**
     * @var string
     */
    public $maskTxt;

    /**
     * @var string
     */
    public $maskDescription;
    protected $_name = [
        'regionId'        => 'RegionId',
        'instanceId'      => 'InstanceId',
        'maskName'        => 'MaskName',
        'maskRegex'       => 'MaskRegex',
        'maskTxt'         => 'MaskTxt',
        'maskDescription' => 'MaskDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->maskName) {
            $res['MaskName'] = $this->maskName;
        }
        if (null !== $this->maskRegex) {
            $res['MaskRegex'] = $this->maskRegex;
        }
        if (null !== $this->maskTxt) {
            $res['MaskTxt'] = $this->maskTxt;
        }
        if (null !== $this->maskDescription) {
            $res['MaskDescription'] = $this->maskDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddLogMaskConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MaskName'])) {
            $model->maskName = $map['MaskName'];
        }
        if (isset($map['MaskRegex'])) {
            $model->maskRegex = $map['MaskRegex'];
        }
        if (isset($map['MaskTxt'])) {
            $model->maskTxt = $map['MaskTxt'];
        }
        if (isset($map['MaskDescription'])) {
            $model->maskDescription = $map['MaskDescription'];
        }

        return $model;
    }
}
