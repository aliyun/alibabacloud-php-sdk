<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListSmartSysAvatarModelsRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $sdkVersion;
    protected $_name = [
        'pageNo'     => 'PageNo',
        'pageSize'   => 'PageSize',
        'sdkVersion' => 'SdkVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sdkVersion) {
            $res['SdkVersion'] = $this->sdkVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSmartSysAvatarModelsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SdkVersion'])) {
            $model->sdkVersion = $map['SdkVersion'];
        }

        return $model;
    }
}
