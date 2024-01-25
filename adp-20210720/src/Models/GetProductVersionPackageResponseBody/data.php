<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\GetProductVersionPackageResponseBody;

use AlibabaCloud\SDK\Adp\V20210720\Models\Platform;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example all
     *
     * @var string
     */
    public $packageContentType;

    /**
     * @example 3.97GB
     *
     * @var string
     */
    public $packageSize;

    /**
     * @example Success
     *
     * @var string
     */
    public $packageStatus;

    /**
     * @example full
     *
     * @var string
     */
    public $packageType;

    /**
     * @example 1c33e7b7-2df8-4632-9f94-e1d98caa410d
     *
     * @var string
     */
    public $packageUID;

    /**
     * @example https://cn-shanghai-cnx-packages.oss-cn-shanghai.aliyuncs.com/products/xxxxxxxxxxxxxxxxxx
     *
     * @var string
     */
    public $packageURL;

    /**
     * @example {
     * }
     * @var Platform
     */
    public $platform;

    /**
     * @var Platform[]
     */
    public $platformList;
    protected $_name = [
        'packageContentType' => 'packageContentType',
        'packageSize'        => 'packageSize',
        'packageStatus'      => 'packageStatus',
        'packageType'        => 'packageType',
        'packageUID'         => 'packageUID',
        'packageURL'         => 'packageURL',
        'platform'           => 'platform',
        'platformList'       => 'platformList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->packageContentType) {
            $res['packageContentType'] = $this->packageContentType;
        }
        if (null !== $this->packageSize) {
            $res['packageSize'] = $this->packageSize;
        }
        if (null !== $this->packageStatus) {
            $res['packageStatus'] = $this->packageStatus;
        }
        if (null !== $this->packageType) {
            $res['packageType'] = $this->packageType;
        }
        if (null !== $this->packageUID) {
            $res['packageUID'] = $this->packageUID;
        }
        if (null !== $this->packageURL) {
            $res['packageURL'] = $this->packageURL;
        }
        if (null !== $this->platform) {
            $res['platform'] = null !== $this->platform ? $this->platform->toMap() : null;
        }
        if (null !== $this->platformList) {
            $res['platformList'] = [];
            if (null !== $this->platformList && \is_array($this->platformList)) {
                $n = 0;
                foreach ($this->platformList as $item) {
                    $res['platformList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['packageContentType'])) {
            $model->packageContentType = $map['packageContentType'];
        }
        if (isset($map['packageSize'])) {
            $model->packageSize = $map['packageSize'];
        }
        if (isset($map['packageStatus'])) {
            $model->packageStatus = $map['packageStatus'];
        }
        if (isset($map['packageType'])) {
            $model->packageType = $map['packageType'];
        }
        if (isset($map['packageUID'])) {
            $model->packageUID = $map['packageUID'];
        }
        if (isset($map['packageURL'])) {
            $model->packageURL = $map['packageURL'];
        }
        if (isset($map['platform'])) {
            $model->platform = Platform::fromMap($map['platform']);
        }
        if (isset($map['platformList'])) {
            if (!empty($map['platformList'])) {
                $model->platformList = [];
                $n                   = 0;
                foreach ($map['platformList'] as $item) {
                    $model->platformList[$n++] = null !== $item ? Platform::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
