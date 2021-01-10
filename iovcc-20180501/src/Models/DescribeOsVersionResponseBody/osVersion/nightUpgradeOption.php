<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeOsVersionResponseBody\osVersion;

use AlibabaCloud\Tea\Model;

class nightUpgradeOption extends Model
{
    /**
     * @var string
     */
    public $downloadType;

    /**
     * @var string
     */
    public $isAllowedCancel;

    /**
     * @var string
     */
    public $isShowTip;
    protected $_name = [
        'downloadType'    => 'DownloadType',
        'isAllowedCancel' => 'IsAllowedCancel',
        'isShowTip'       => 'IsShowTip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadType) {
            $res['DownloadType'] = $this->downloadType;
        }
        if (null !== $this->isAllowedCancel) {
            $res['IsAllowedCancel'] = $this->isAllowedCancel;
        }
        if (null !== $this->isShowTip) {
            $res['IsShowTip'] = $this->isShowTip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nightUpgradeOption
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadType'])) {
            $model->downloadType = $map['DownloadType'];
        }
        if (isset($map['IsAllowedCancel'])) {
            $model->isAllowedCancel = $map['IsAllowedCancel'];
        }
        if (isset($map['IsShowTip'])) {
            $model->isShowTip = $map['IsShowTip'];
        }

        return $model;
    }
}
