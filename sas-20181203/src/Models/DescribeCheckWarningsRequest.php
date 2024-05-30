<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCheckWarningsRequest extends Model
{
    /**
     * @description The ID of the check item.
     *
     * @example 2546
     *
     * @var int
     */
    public $checkId;

    /**
     * @description The type of the check item. Valid values:
     *
     *   **hc.check.type.identity_auth**: identity authentication
     *   **hc.check.type.access_control**: access control
     *   **hc.check.type.network_service**: network and service
     *   **hc.check.type.service_conf**: service configuration
     *   **hc.check.type.file_rights**: file permission
     *   **hc.check.type.security_audit**: security audit
     *   **hc.check.type.attack_defense**: intrusion prevention
     *   **hc.check.type.others**: others
     *
     * @example hc.check.type.attack_defense
     *
     * @var string
     */
    public $checkType;

    /**
     * @description The name of the container.
     *
     * @example /redis
     *
     * @var string
     */
    public $containerName;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of entries to return on each page. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The Alibaba Cloud account ID of the member in the resource directory.
     *
     * >  To obtain the Alibaba Cloud account ID, call the [DescribeMonitorAccounts](~~DescribeMonitorAccounts~~) operation.
     * @example 127608589417****
     *
     * @var int
     */
    public $resourceDirectoryAccountId;

    /**
     * @description The ID of the risk item. This parameter is required.
     *
     * >  To query the information about the risk items and check items of a server, you must specify the IDs of the risk items. You can call the [DescribeCheckWarningSummary](~~DescribeCheckWarningSummary~~) operation to query the IDs of risk items.
     * @example 10354
     *
     * @var int
     */
    public $riskId;

    /**
     * @description The status of the check item. Valid values:
     *
     *   **1**: failed
     *   **2**: verifying
     *   **3**: passed
     *   **5**: expired
     *   **6**: ignored
     *
     * @example 1
     *
     * @var int
     */
    public $riskStatus;

    /**
     * @description The source IP address of the request.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The UUID of the server on which the baseline check is performed.
     *
     * This parameter is required.
     * @example d42f938c-d962-48a0-90f9-05****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'checkId'                    => 'CheckId',
        'checkType'                  => 'CheckType',
        'containerName'              => 'ContainerName',
        'currentPage'                => 'CurrentPage',
        'lang'                       => 'Lang',
        'pageSize'                   => 'PageSize',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'riskId'                     => 'RiskId',
        'riskStatus'                 => 'RiskStatus',
        'sourceIp'                   => 'SourceIp',
        'uuid'                       => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }
        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
        }
        if (null !== $this->riskId) {
            $res['RiskId'] = $this->riskId;
        }
        if (null !== $this->riskStatus) {
            $res['RiskStatus'] = $this->riskStatus;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCheckWarningsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }
        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }
        if (isset($map['RiskId'])) {
            $model->riskId = $map['RiskId'];
        }
        if (isset($map['RiskStatus'])) {
            $model->riskStatus = $map['RiskStatus'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
