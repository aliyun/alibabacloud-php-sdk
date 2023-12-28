<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribePubUserListBySubUserResponseBody;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribePubUserListBySubUserResponseBody\subUserDetail\onlinePeriods;
use AlibabaCloud\Tea\Model;

class subUserDetail extends Model
{
    /**
     * @example NATIVE
     *
     * @var string
     */
    public $clientType;

    /**
     * @example 1614936817
     *
     * @var int
     */
    public $createdTs;

    /**
     * @example 1614936817
     *
     * @var int
     */
    public $destroyedTs;

    /**
     * @example 0
     *
     * @var int
     */
    public $duration;

    /**
     * @example 浙江省-杭州市
     *
     * @var string
     */
    public $location;

    /**
     * @example 4G
     *
     * @var string
     */
    public $network;

    /**
     * @var string[]
     */
    public $networkList;

    /**
     * @example 0
     *
     * @var int
     */
    public $onlineDuration;

    /**
     * @var onlinePeriods[]
     */
    public $onlinePeriods;

    /**
     * @example iOS
     *
     * @var string
     */
    public $os;

    /**
     * @var string[]
     */
    public $osList;

    /**
     * @var string[]
     */
    public $roles;

    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $sdkVersion;

    /**
     * @var string[]
     */
    public $sdkVersionList;

    /**
     * @example testuserid
     *
     * @var string
     */
    public $userId;

    /**
     * @example 旁路转推
     *
     * @var string
     */
    public $userIdAlias;
    protected $_name = [
        'clientType'     => 'ClientType',
        'createdTs'      => 'CreatedTs',
        'destroyedTs'    => 'DestroyedTs',
        'duration'       => 'Duration',
        'location'       => 'Location',
        'network'        => 'Network',
        'networkList'    => 'NetworkList',
        'onlineDuration' => 'OnlineDuration',
        'onlinePeriods'  => 'OnlinePeriods',
        'os'             => 'Os',
        'osList'         => 'OsList',
        'roles'          => 'Roles',
        'sdkVersion'     => 'SdkVersion',
        'sdkVersionList' => 'SdkVersionList',
        'userId'         => 'UserId',
        'userIdAlias'    => 'UserIdAlias',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }
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
        if (null !== $this->networkList) {
            $res['NetworkList'] = $this->networkList;
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
        if (null !== $this->osList) {
            $res['OsList'] = $this->osList;
        }
        if (null !== $this->roles) {
            $res['Roles'] = $this->roles;
        }
        if (null !== $this->sdkVersion) {
            $res['SdkVersion'] = $this->sdkVersion;
        }
        if (null !== $this->sdkVersionList) {
            $res['SdkVersionList'] = $this->sdkVersionList;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userIdAlias) {
            $res['UserIdAlias'] = $this->userIdAlias;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subUserDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }
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
        if (isset($map['NetworkList'])) {
            if (!empty($map['NetworkList'])) {
                $model->networkList = $map['NetworkList'];
            }
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
        if (isset($map['OsList'])) {
            if (!empty($map['OsList'])) {
                $model->osList = $map['OsList'];
            }
        }
        if (isset($map['Roles'])) {
            if (!empty($map['Roles'])) {
                $model->roles = $map['Roles'];
            }
        }
        if (isset($map['SdkVersion'])) {
            $model->sdkVersion = $map['SdkVersion'];
        }
        if (isset($map['SdkVersionList'])) {
            if (!empty($map['SdkVersionList'])) {
                $model->sdkVersionList = $map['SdkVersionList'];
            }
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserIdAlias'])) {
            $model->userIdAlias = $map['UserIdAlias'];
        }

        return $model;
    }
}
