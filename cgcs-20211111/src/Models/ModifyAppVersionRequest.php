<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class ModifyAppVersionRequest extends Model
{
    /**
     * @var string
     */
    public $appVersionId;

    /**
     * @var string
     */
    public $appVersionName;
    protected $_name = [
        'appVersionId'   => 'AppVersionId',
        'appVersionName' => 'AppVersionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appVersionId) {
            $res['AppVersionId'] = $this->appVersionId;
        }
        if (null !== $this->appVersionName) {
            $res['AppVersionName'] = $this->appVersionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAppVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppVersionId'])) {
            $model->appVersionId = $map['AppVersionId'];
        }
        if (isset($map['AppVersionName'])) {
            $model->appVersionName = $map['AppVersionName'];
        }

        return $model;
    }
}
