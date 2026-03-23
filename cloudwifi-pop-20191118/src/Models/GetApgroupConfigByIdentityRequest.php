<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Dara\Model;

class GetApgroupConfigByIdentityRequest extends Model
{
    /**
     * @var int
     */
    public $apgroupId;

    /**
     * @var string
     */
    public $apgroupUuid;

    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $appName;
    protected $_name = [
        'apgroupId' => 'ApgroupId',
        'apgroupUuid' => 'ApgroupUuid',
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
        if (null !== $this->apgroupId) {
            $res['ApgroupId'] = $this->apgroupId;
        }

        if (null !== $this->apgroupUuid) {
            $res['ApgroupUuid'] = $this->apgroupUuid;
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
        if (isset($map['ApgroupId'])) {
            $model->apgroupId = $map['ApgroupId'];
        }

        if (isset($map['ApgroupUuid'])) {
            $model->apgroupUuid = $map['ApgroupUuid'];
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
