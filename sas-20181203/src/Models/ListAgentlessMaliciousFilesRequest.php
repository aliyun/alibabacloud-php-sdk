<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListAgentlessMaliciousFilesRequest extends Model
{
    /**
     * @description The page number.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description Specifies whether the vulnerability is handled. Valid values:
     *
     *   Y: The vulnerability is handled.
     *   N: The vulnerability is not handled.
     *
     * @example Y
     *
     * @var string
     */
    public $dealed;

    /**
     * @description The event ID.
     *
     * @example 81****
     *
     * @var int
     */
    public $eventId;

    /**
     * @description The name of the malicious file that you want to query.
     *
     * > Fuzzy match is supported.
     * @example WebShell
     *
     * @var string
     */
    public $fuzzyMaliciousName;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese.
     *   **en**: English.
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The severities of the malicious files. Separate multiple values with commas (,). Valid values:
     *
     *   serious
     *   suspicious
     *   remind
     *
     * @example remind,suspicious
     *
     * @var string
     */
    public $levels;

    /**
     * @description The MD5 hash value of the malicious file.
     *
     * @example d836968041f7683b5459****
     *
     * @var string
     */
    public $maliciousMd5;

    /**
     * @description The alert type.
     *
     * Valid values when Lang is set to zh:
     *
     *   WebShell
     *   Malicious Software
     *   Malicious Script
     *
     * Valid values when Lang is set to en:
     *
     *   WebShell
     *   Malicious Software
     *   Malicious Script
     *
     * @example WebShell
     *
     * @var string
     */
    public $maliciousType;

    /**
     * @description The number of entries per page.
     *
     * This parameter is required.
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The remarks for the asset affected by the vulnerability. The value can be the private IP address, public IP address, or name of the asset. Fuzzy match is supported.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $remark;

    /**
     * @description The UUID of the asset.
     *
     * @example d2d94e8b-bb25-4744-8004-1e08a53c****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'currentPage'        => 'CurrentPage',
        'dealed'             => 'Dealed',
        'eventId'            => 'EventId',
        'fuzzyMaliciousName' => 'FuzzyMaliciousName',
        'lang'               => 'Lang',
        'levels'             => 'Levels',
        'maliciousMd5'       => 'MaliciousMd5',
        'maliciousType'      => 'MaliciousType',
        'pageSize'           => 'PageSize',
        'remark'             => 'Remark',
        'uuid'               => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->fuzzyMaliciousName) {
            $res['FuzzyMaliciousName'] = $this->fuzzyMaliciousName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->levels) {
            $res['Levels'] = $this->levels;
        }
        if (null !== $this->maliciousMd5) {
            $res['MaliciousMd5'] = $this->maliciousMd5;
        }
        if (null !== $this->maliciousType) {
            $res['MaliciousType'] = $this->maliciousType;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAgentlessMaliciousFilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['FuzzyMaliciousName'])) {
            $model->fuzzyMaliciousName = $map['FuzzyMaliciousName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Levels'])) {
            $model->levels = $map['Levels'];
        }
        if (isset($map['MaliciousMd5'])) {
            $model->maliciousMd5 = $map['MaliciousMd5'];
        }
        if (isset($map['MaliciousType'])) {
            $model->maliciousType = $map['MaliciousType'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
