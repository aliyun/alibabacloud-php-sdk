<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QueryGateVerifyStatisticPublicRequest extends Model
{
    /**
     * @description The verification method. Valid values:
     *
     *   **1**: one-click logon
     *   **2**: phone number verification, including the verification of the phone number used in HTML5 pages
     *   **3**: SMS verification
     *   **4**: facial recognition
     *
     * @example 1
     *
     * @var int
     */
    public $authenticationType;

    /**
     * @description The end date. Specify this parameter in the YYYYMMDD format. Example: 20220106.
     *
     * @example 20220106
     *
     * @var string
     */
    public $endDate;

    /**
     * @description The type of the operating system. Valid values:
     *
     *   **Android**
     *   **iOS**
     *
     * @example Android
     *
     * @var string
     */
    public $osType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description The service code.
     *
     * @example FC100000038194004
     *
     * @var string
     */
    public $sceneCode;

    /**
     * @description The start date. Specify this parameter in the YYYYMMDD format. Example: 20220101.
     *
     * @example 20220101
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'authenticationType'   => 'AuthenticationType',
        'endDate'              => 'EndDate',
        'osType'               => 'OsType',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'sceneCode'            => 'SceneCode',
        'startDate'            => 'StartDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authenticationType) {
            $res['AuthenticationType'] = $this->authenticationType;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryGateVerifyStatisticPublicRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthenticationType'])) {
            $model->authenticationType = $map['AuthenticationType'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
