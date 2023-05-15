<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedVulResponseBody;

use AlibabaCloud\Tea\Model;

class groupedVulItems extends Model
{
    /**
     * @description The number of handled vulnerabilities.
     *
     * @example RHSA-2017:0184-Important: mysql security update
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description The tag that is added to the vulnerability. Valid values:
     *
     *   Restart required
     *   Remote exploitation
     *   Exploit exists
     *   Exploitable
     *   Privilege escalation
     *   Code execution
     *
     * @example 0
     *
     * @var int
     */
    public $asapCount;

    /**
     * @description An array that consists of the details about the vulnerability.
     *
     * @example 1639371446000
     *
     * @var int
     */
    public $gmtLast;

    /**
     * @description The total number of entries returned.
     *
     * @example 0
     *
     * @var int
     */
    public $handledCount;

    /**
     * @description The number of vulnerabilities that have the **low** priority.
     *
     * @example 0
     *
     * @var int
     */
    public $laterCount;

    /**
     * @description The timestamp when the vulnerability was last detected. Unit: milliseconds.
     *
     * @example oval:com.redhat.rhsa:def:20170184
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 59
     *
     * @var int
     */
    public $nntfCount;

    /**
     * @description The number of entries returned per page. Default value: 10.
     *
     * @example 1
     *
     * @var int
     */
    public $raspDefend;

    /**
     * @description The type of the vulnerability. Valid values:
     *
     *   **cve**: Linux software vulnerability
     *   **sys**: Windows system vulnerability
     *   **cms**: Web-CMS vulnerability
     *   **app**: application vulnerability
     *   **emg**: urgent vulnerability
     *   **sca**: vulnerability that is detected based on software component analysis
     *
     * @example Code Execution
     *
     * @var string
     */
    public $tags;

    /**
     * @description gmtLast
     *
     * @example 0
     *
     * @var int
     */
    public $totalFixCount;

    /**
     * @description The page number of the returned page.
     *
     * @example cve
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'aliasName'     => 'AliasName',
        'asapCount'     => 'AsapCount',
        'gmtLast'       => 'GmtLast',
        'handledCount'  => 'HandledCount',
        'laterCount'    => 'LaterCount',
        'name'          => 'Name',
        'nntfCount'     => 'NntfCount',
        'raspDefend'    => 'RaspDefend',
        'tags'          => 'Tags',
        'totalFixCount' => 'TotalFixCount',
        'type'          => 'Type',
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
        if (null !== $this->raspDefend) {
            $res['RaspDefend'] = $this->raspDefend;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->totalFixCount) {
            $res['TotalFixCount'] = $this->totalFixCount;
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
        if (isset($map['RaspDefend'])) {
            $model->raspDefend = $map['RaspDefend'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['TotalFixCount'])) {
            $model->totalFixCount = $map['TotalFixCount'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
