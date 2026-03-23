<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Dara\Model;

class GetApDetailStatusRequest extends Model
{
    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $mac;

    /**
     * @var bool
     */
    public $needApgroupInfo;

    /**
     * @var bool
     */
    public $needRadioStatus;
    protected $_name = [
        'appCode' => 'AppCode',
        'appName' => 'AppName',
        'mac' => 'Mac',
        'needApgroupInfo' => 'NeedApgroupInfo',
        'needRadioStatus' => 'NeedRadioStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }

        if (null !== $this->needApgroupInfo) {
            $res['NeedApgroupInfo'] = $this->needApgroupInfo;
        }

        if (null !== $this->needRadioStatus) {
            $res['NeedRadioStatus'] = $this->needRadioStatus;
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
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }

        if (isset($map['NeedApgroupInfo'])) {
            $model->needApgroupInfo = $map['NeedApgroupInfo'];
        }

        if (isset($map['NeedRadioStatus'])) {
            $model->needRadioStatus = $map['NeedRadioStatus'];
        }

        return $model;
    }
}
