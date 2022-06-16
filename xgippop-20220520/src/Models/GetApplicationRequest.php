<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models;

use AlibabaCloud\Tea\Model;

class GetApplicationRequest extends Model
{
    /**
     * @description 阿里UID
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description 应用ID
     *
     * @var string
     */
    public $appCode;
    protected $_name = [
        'aliUid'  => 'AliUid',
        'appCode' => 'AppCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }

        return $model;
    }
}
