<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainSecureVulListResponseBody;

use AlibabaCloud\Tea\Model;

class vulList extends Model
{
    /**
     * @description The alias of the vulnerability.
     *
     * @example CESA-2023:3555: python Security Update
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description The number of the vulnerabilities that have the **high** priority.
     *
     * @example 50
     *
     * @var int
     */
    public $asapCount;

    /**
     * @description The timestamp when the vulnerability was last detected. Unit: milliseconds.
     *
     * @example 1639371446000
     *
     * @var int
     */
    public $gmtLast;

    /**
     * @description The number of handled vulnerabilities.
     *
     * @example 33
     *
     * @var int
     */
    public $handledCount;

    /**
     * @description The number of the vulnerabilities that have the **medium** priority.
     *
     * @example 30
     *
     * @var int
     */
    public $laterCount;

    /**
     * @description The name of the vulnerability.
     *
     * @example oval:com.redhat.rhsa:def:20170574
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of the vulnerabilities that have the **low** priority.
     *
     * @example 20
     *
     * @var int
     */
    public $nntfCount;

    /**
     * @description The tag that is added to the vulnerability. Valid values:
     *
     *   Restart required
     *   Remote utilization
     *   EXP exists
     *   Available
     *   Elevation of Privilege
     *   Code Execution
     *
     * @example Code Execution
     *
     * @var string
     */
    public $tags;

    /**
     * @description The type of the vulnerability. Default value: cve. Valid values:
     *
     *   **cve**: Linux software vulnerability.
     *   **sys**: Windows system vulnerability.
     *   **cms**: Web-CMS vulnerability.
     *   **app**: application vulnerability that is detected by network scanning.
     *   **sca**: application vulnerability that is detected by using software component analysis.
     *
     * @example app
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
     * @return vulList
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
