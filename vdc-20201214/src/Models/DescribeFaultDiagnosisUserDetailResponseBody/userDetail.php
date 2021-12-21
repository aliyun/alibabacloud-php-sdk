<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisUserDetailResponseBody;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisUserDetailResponseBody\userDetail\onlinePeriods;
use AlibabaCloud\Tea\Model;

class userDetail extends Model
{
    /**
     * @description 创建通话时间，使用UNIX时间戳表示，单位：秒。
     *
     * @var int
     */
    public $createdTs;

    /**
     * @description 释放通话时间，使用UNIX时间戳表示，单位：秒。通话未结束时值为0。
     *
     * @var int
     */
    public $destroyedTs;

    /**
     * @description 通话时长，首次进入到最后离开，单位：秒。
     *
     * @var int
     */
    public $duration;

    /**
     * @description 地理位置信息，例如：北京市-北京市
     *
     * @var string
     */
    public $location;

    /**
     * @description 网络类型，如WiFi，4G等
     *
     * @var string
     */
    public $network;

    /**
     * @description 在线时长，单位：秒。
     *
     * @var int
     */
    public $onlineDuration;

    /**
     * @description 在线时段信息。
     *
     * @var onlinePeriods[]
     */
    public $onlinePeriods;

    /**
     * @description 平台类型：若用户客户端为WEB则是浏览器类型，若客户端为NATIVE则是操作系统类型
     *
     * @var string
     */
    public $os;

    /**
     * @description SDK版本，如1.0.0、1.1.1等
     *
     * @var string
     */
    public $sdkVersion;

    /**
     * @description 用户ID。
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'createdTs'      => 'CreatedTs',
        'destroyedTs'    => 'DestroyedTs',
        'duration'       => 'Duration',
        'location'       => 'Location',
        'network'        => 'Network',
        'onlineDuration' => 'OnlineDuration',
        'onlinePeriods'  => 'OnlinePeriods',
        'os'             => 'Os',
        'sdkVersion'     => 'SdkVersion',
        'userId'         => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTs) {
            $res['CreatedTs'] = $this->createdTs;
        }
        if (null !== $this->destroyedTs) {
            $res['DestroyedTs'] = $this->destroyedTs;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }
        if (null !== $this->onlineDuration) {
            $res['OnlineDuration'] = $this->onlineDuration;
        }
        if (null !== $this->onlinePeriods) {
            $res['OnlinePeriods'] = [];
            if (null !== $this->onlinePeriods && \is_array($this->onlinePeriods)) {
                $n = 0;
                foreach ($this->onlinePeriods as $item) {
                    $res['OnlinePeriods'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->sdkVersion) {
            $res['SdkVersion'] = $this->sdkVersion;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTs'])) {
            $model->createdTs = $map['CreatedTs'];
        }
        if (isset($map['DestroyedTs'])) {
            $model->destroyedTs = $map['DestroyedTs'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }
        if (isset($map['OnlineDuration'])) {
            $model->onlineDuration = $map['OnlineDuration'];
        }
        if (isset($map['OnlinePeriods'])) {
            if (!empty($map['OnlinePeriods'])) {
                $model->onlinePeriods = [];
                $n                    = 0;
                foreach ($map['OnlinePeriods'] as $item) {
                    $model->onlinePeriods[$n++] = null !== $item ? onlinePeriods::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['SdkVersion'])) {
            $model->sdkVersion = $map['SdkVersion'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
