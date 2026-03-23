<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Dara\Model;

class GetApAssetRequest extends Model
{
    /**
     * @var string
     */
    public $apMac;

    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $appName;
    protected $_name = [
        'apMac' => 'ApMac',
        'appCode' => 'AppCode',
        'appName' => 'AppName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apMac) {
            $res['ApMac'] = $this->apMac;
        }

        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
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
        if (isset($map['ApMac'])) {
            $model->apMac = $map['ApMac'];
        }

        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        return $model;
    }
}
