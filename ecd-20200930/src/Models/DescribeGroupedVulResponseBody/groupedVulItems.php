<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeGroupedVulResponseBody;

use AlibabaCloud\Tea\Model;

class groupedVulItems extends Model
{
    /**
     * @description The alias of the vulnerability.
     *
     * @example RHSA-2019:0230-Important: polkit security update
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description The number of high-risk vulnerabilities.
     *
     * @example 1
     *
     * @var int
     */
    public $asapCount;

    /**
     * @description The time when the vulnerability was last detected. The timestamp follows the UNIX time format. It is the number of milliseconds that have elapsed since 00:00:00 Thursday, January 1, 1970.
     *
     * @example 1554185744000
     *
     * @var string
     */
    public $gmtLast;

    /**
     * @description The number of vulnerabilities processed.
     *
     * @example 0
     *
     * @var int
     */
    public $handledCount;

    /**
     * @description The number of medium-risk vulnerabilities.
     *
     * @example 1
     *
     * @var int
     */
    public $laterCount;

    /**
     * @description The name of the vulnerability.
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of low-risk vulnerabilities.
     *
     * @example 0
     *
     * @var int
     */
    public $nntfCount;

    /**
     * @description The tags of the vulnerability.
     *
     * @var string
     */
    public $tags;

    /**
     * @description The type of the vulnerability. Valid values:
     *
     *   cve: Linux software vulnerability
     *   sys: Windows system vulnerability
     *
     * @example cve
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'aliasName'    => 'AliasName',
        'asapCount'    => 'AsapCount',
        'gmtLast'      => 'GmtLast',
        'handledCount' => 'HandledCount',
        'laterCount'   => 'LaterCount',
        'name'         => 'Name',
        'nntfCount'    => 'NntfCount',
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
        if (null !== $this->gmtLast) {
            $res['GmtLast'] = $this->gmtLast;
        }
        if (null !== $this->handledCount) {
            $res['HandledCount'] = $this->handledCount;
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
        if (isset($map['GmtLast'])) {
            $model->gmtLast = $map['GmtLast'];
        }
        if (isset($map['HandledCount'])) {
            $model->handledCount = $map['HandledCount'];
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
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
