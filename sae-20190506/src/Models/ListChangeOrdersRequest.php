<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class ListChangeOrdersRequest extends Model
{
    /**
     * @description 1
     *
     * This parameter is required.
     *
     * @example 145341c-9708-4967-b3ec-24933767****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the request.
     *
     * @example 2
     *
     * @var string
     */
    public $coStatus;

    /**
     * @description The type of the change order. Valid values:
     *
     *   **CoBindSlb**: associates the Server Load Balancer (SLB) instance with the application.
     *   **CoUnbindSlb**: disassociates an SLB instance from the application.
     *   **CoCreateApp**: creates the application.
     *   **CoDeleteApp**: deletes the application.
     *   **CoDeploy**: deploys the application.
     *   **CoRestartApplication**: restarts the application.
     *   **CoRollback**: rolls back the application.
     *   **CoScaleIn**: scales in the application.
     *   **CoScaleOut**: scales out the application.
     *   **CoStartApplication**: starts the application.
     *   **CoStopApplication**: stops the application.
     *   **CoRescaleApplicationVertically**: modifies the instance type.
     *   **CoDeployHistroy**: rolls back the application to an earlier version.
     *   **CoBindNas**: associates a network-attached storage (NAS) file system with the application.
     *   **CoUnbindNas**: disassociates a NAS file system from the application.
     *   **CoBatchStartApplication**: starts multiple applications concurrently.
     *   **CoBatchStopApplication**: stops multiple applications concurrently.
     *   **CoRestartInstances**: restarts the instance.
     *   **CoDeleteInstances**: deletes the instance.
     *   **CoScaleInAppWithInstances**: reduces the specified number of application instances.
     *
     * @example CoCreateApp
     *
     * @var string
     */
    public $coType;

    /**
     * @description 20
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description CoCreateApp
     *
     * @example test
     *
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @description test
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var bool
     */
    public $reverse;
    protected $_name = [
        'appId' => 'AppId',
        'coStatus' => 'CoStatus',
        'coType' => 'CoType',
        'currentPage' => 'CurrentPage',
        'key' => 'Key',
        'orderBy' => 'OrderBy',
        'pageSize' => 'PageSize',
        'reverse' => 'Reverse',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->coStatus) {
            $res['CoStatus'] = $this->coStatus;
        }
        if (null !== $this->coType) {
            $res['CoType'] = $this->coType;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->reverse) {
            $res['Reverse'] = $this->reverse;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListChangeOrdersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CoStatus'])) {
            $model->coStatus = $map['CoStatus'];
        }
        if (isset($map['CoType'])) {
            $model->coType = $map['CoType'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Reverse'])) {
            $model->reverse = $map['Reverse'];
        }

        return $model;
    }
}
