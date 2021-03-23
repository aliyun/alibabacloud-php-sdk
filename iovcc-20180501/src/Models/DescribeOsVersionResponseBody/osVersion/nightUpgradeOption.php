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
    public $isShowTip;

    /**
     * @var string
     */
    public $isAllowedCancel;
    protected $_name = [
        'downloadType'    => 'DownloadType',
        'isShowTip'       => 'IsShowTip',
        'isAllowedCancel' => 'IsAllowedCancel',
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
        if (null !== $this->isShowTip) {
            $res['IsShowTip'] = $this->isShowTip;
        }
        if (null !== $this->isAllowedCancel) {
            $res['IsAllowedCancel'] = $this->isAllowedCancel;
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
        if (isset($map['IsShowTip'])) {
            $model->isShowTip = $map['IsShowTip'];
        }
        if (isset($map['IsAllowedCancel'])) {
            $model->isAllowedCancel = $map['IsAllowedCancel'];
        }

        return $model;
    }
}
