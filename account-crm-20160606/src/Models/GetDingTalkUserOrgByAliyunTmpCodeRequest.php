<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class GetDingTalkUserOrgByAliyunTmpCodeRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $dingTalkChannel;

    /**
     * @var string
     */
    public $tmpCode;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'appName' => 'AppName',
        'dingTalkChannel' => 'DingTalkChannel',
        'tmpCode' => 'TmpCode',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->dingTalkChannel) {
            $res['DingTalkChannel'] = $this->dingTalkChannel;
        }

        if (null !== $this->tmpCode) {
            $res['TmpCode'] = $this->tmpCode;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['DingTalkChannel'])) {
            $model->dingTalkChannel = $map['DingTalkChannel'];
        }

        if (isset($map['TmpCode'])) {
            $model->tmpCode = $map['TmpCode'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
