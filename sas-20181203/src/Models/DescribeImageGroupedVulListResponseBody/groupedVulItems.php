<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageGroupedVulListResponseBody;

use AlibabaCloud\Tea\Model;

class groupedVulItems extends Model
{
    /**
     * @description The alias of the vulnerability.
     *
     * @example RHSA-2017:3075-Important: wget security update
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description The number of vulnerabilities that have the high priority.
     *
     * @example 26
     *
     * @var int
     */
    public $asapCount;

    /**
     * @description 是否可支持修复。取值：
     * - **yes**：支持修复
     * - **no**： 不支持修复
     * @example yes
     *
     * @var string
     */
    public $canFix;

    /**
     * @description The timestamp when the first scan was performed. Unit: milliseconds.
     *
     * @example 1611201274000
     *
     * @var int
     */
    public $gmtLast;

    /**
     * @description The timestamp when the last scan was performed. Unit: milliseconds.
     *
     * @example 1611201274000
     *
     * @var int
     */
    public $lastScanTime;

    /**
     * @description The number of vulnerabilities that have the medium priority.
     *
     * @example 26
     *
     * @var int
     */
    public $laterCount;

    /**
     * @description The name of the vulnerability.
     *
     * @example debian:9:CVE-2019-3858
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of vulnerabilities that have the low priority.
     *
     * @example 29
     *
     * @var int
     */
    public $nntfCount;

    /**
     * @description The status of the vulnerability. Valid values:
     *
     *   **0**: unhandled
     *   **1**: handled
     *   **2**: verifying
     *   **3**: added to the whitelist
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The tag of the vulnerability. Valid values:
     *
     *   Restart required
     *   Remote exploitation
     *   Exploit exists
     *   Exploitable
     *   Privilege escalation
     *   Code execution
     *
     * @example EXP exists
     *
     * @var string
     */
    public $tags;

    /**
     * @description The type of the vulnerability. Valid values:
     *
     *   **cve**: image system vulnerability
     *   **sca**: image application vulnerability
     *
     * @example cve
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'aliasName'    => 'AliasName',
        'asapCount'    => 'AsapCount',
        'canFix'       => 'CanFix',
        'gmtLast'      => 'GmtLast',
        'lastScanTime' => 'LastScanTime',
        'laterCount'   => 'LaterCount',
        'name'         => 'Name',
        'nntfCount'    => 'NntfCount',
        'status'       => 'Status',
        'tags'         => 'Tags',
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
        if (null !== $this->asapCount) {
            $res['AsapCount'] = $this->asapCount;
        }
        if (null !== $this->canFix) {
            $res['CanFix'] = $this->canFix;
        }
        if (null !== $this->gmtLast) {
            $res['GmtLast'] = $this->gmtLast;
        }
        if (null !== $this->lastScanTime) {
            $res['LastScanTime'] = $this->lastScanTime;
        }
        if (null !== $this->laterCount) {
            $res['LaterCount'] = $this->laterCount;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nntfCount) {
            $res['NntfCount'] = $this->nntfCount;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
        if (isset($map['AsapCount'])) {
            $model->asapCount = $map['AsapCount'];
        }
        if (isset($map['CanFix'])) {
            $model->canFix = $map['CanFix'];
        }
        if (isset($map['GmtLast'])) {
            $model->gmtLast = $map['GmtLast'];
        }
        if (isset($map['LastScanTime'])) {
            $model->lastScanTime = $map['LastScanTime'];
        }
        if (isset($map['LaterCount'])) {
            $model->laterCount = $map['LaterCount'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NntfCount'])) {
            $model->nntfCount = $map['NntfCount'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
