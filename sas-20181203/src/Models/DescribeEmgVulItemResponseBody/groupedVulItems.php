<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeEmgVulItemResponseBody;

use AlibabaCloud\Tea\Model;

class groupedVulItems extends Model
{
    /**
     * @description The name of the urgent vulnerability.
     *
     * @example Changjietong T + SetupAccount/Upload.aspx file Upload vulnerability (CNVD-2022-60632)
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description The check method.
     *
     * @example 1
     *
     * @var int
     */
    public $checkType;

    /**
     * @description The timestamp when the urgent vulnerability was last detected. Unit: milliseconds.
     *
     * @example 1619286031000
     *
     * @var int
     */
    public $gmtLastCheck;

    /**
     * @description The timestamp when the vulnerability was disclosed. Unit: milliseconds.
     *
     * @example 1618887687000
     *
     * @var int
     */
    public $gmtPublish;

    /**
     * @description The name of the detection rule.
     *
     * @example scan:AVD-2021-179344
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of unhandled urgent vulnerabilities.
     *
     * @example 0
     *
     * @var int
     */
    public $pendingCount;

    /**
     * @description The progress of the urgent vulnerability detection task. Valid values: 0 to 100.
     *
     * > This parameter is returned only when an urgent vulnerability is being detected.
     * @example 50
     *
     * @var int
     */
    public $progress;

    /**
     * @description The detection status of the urgent vulnerability. Valid values:
     *
     *   **10**: The urgent vulnerability is not detected.
     *   **20**: The urgent vulnerability is being detected.
     *   **30**: The urgent vulnerability detection is complete.
     *
     * @example 30
     *
     * @var int
     */
    public $status;

    /**
     * @description The method that is used to detect the urgent vulnerability. Valid values:
     *
     *   **python**: The Version method is used. Security Center checks the software versions of your server to check whether disclosed vulnerabilities exist on your server.
     *   **scan**: The Network Scan method is used. Security Center analyzes the access traffic to your server over the Internet to check whether vulnerabilities exist on your server.
     *
     * @example scan
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'aliasName'    => 'AliasName',
        'checkType'    => 'CheckType',
        'gmtLastCheck' => 'GmtLastCheck',
        'gmtPublish'   => 'GmtPublish',
        'name'         => 'Name',
        'pendingCount' => 'PendingCount',
        'progress'     => 'Progress',
        'status'       => 'Status',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }
        if (null !== $this->gmtLastCheck) {
            $res['GmtLastCheck'] = $this->gmtLastCheck;
        }
        if (null !== $this->gmtPublish) {
            $res['GmtPublish'] = $this->gmtPublish;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pendingCount) {
            $res['PendingCount'] = $this->pendingCount;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupedVulItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }
        if (isset($map['GmtLastCheck'])) {
            $model->gmtLastCheck = $map['GmtLastCheck'];
        }
        if (isset($map['GmtPublish'])) {
            $model->gmtPublish = $map['GmtPublish'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PendingCount'])) {
            $model->pendingCount = $map['PendingCount'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
