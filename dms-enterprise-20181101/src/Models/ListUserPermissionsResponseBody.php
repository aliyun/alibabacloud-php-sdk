<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUserPermissionsResponseBody\userPermissions;
use AlibabaCloud\Tea\Model;

class ListUserPermissionsResponseBody extends Model
{
    /**
     * @description The ID of the user. You can call the [GetUser](~~147098~~) or [ListUsers](~~141938~~) operation to query the ID of the user.
     *
     * >  The user ID is different from the ID of your Alibaba Cloud account.
     * @example UnknownError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The type of the environment to which the database belongs. Valid values:
     *
     *   product: production environment
     *   dev: development environment
     *   pre: staging environment
     *   test: test environment
     *   sit: SIT environment
     *   uat: user acceptance testing (UAT) environment
     *   pet: stress testing environment
     *   stag: STAG environment
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The details of the permissions that the user has.
     *
     * @example C51420E3-144A-4A94-B473-8662FCF4AD10
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The permissions on a specific type of resources that you want to query. Valid values:
     *
     *   DATABASE: permissions on databases
     *   TABLE: permissions on tables
     *   COLUMN: permissions on fields
     *   INSTANCE: permissions on instances
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description Indicates whether the database is a logical database. Valid values:
     *
     *   true: The database is a logical database.
     *   false: The database is a physical database.
     *
     * @var userPermissions
     */
    public $userPermissions;
    protected $_name = [
        'errorCode'       => 'ErrorCode',
        'errorMessage'    => 'ErrorMessage',
        'requestId'       => 'RequestId',
        'success'         => 'Success',
        'totalCount'      => 'TotalCount',
        'userPermissions' => 'UserPermissions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->userPermissions) {
            $res['UserPermissions'] = null !== $this->userPermissions ? $this->userPermissions->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserPermissionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['UserPermissions'])) {
            $model->userPermissions = userPermissions::fromMap($map['UserPermissions']);
        }

        return $model;
    }
}
