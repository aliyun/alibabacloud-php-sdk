<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Dara\Model;

class AddApListToApgroupShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $apGroupId;

    /**
     * @var string
     */
    public $apMacListShrink;

    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $appName;
    protected $_name = [
        'apGroupId' => 'ApGroupId',
        'apMacListShrink' => 'ApMacList',
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
        if (null !== $this->apGroupId) {
            $res['ApGroupId'] = $this->apGroupId;
        }

        if (null !== $this->apMacListShrink) {
            $res['ApMacList'] = $this->apMacListShrink;
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
        if (isset($map['ApGroupId'])) {
            $model->apGroupId = $map['ApGroupId'];
        }

        if (isset($map['ApMacList'])) {
            $model->apMacListShrink = $map['ApMacList'];
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
