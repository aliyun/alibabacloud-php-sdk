<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyCreateVulWhitelistRequest extends Model
{
    /**
     * @description The reason why you add the vulnerability to the whitelist.
     *
     * @example This vulnerability is not harmful
     *
     * @var string
     */
    public $reason;

    /**
     * @description The applicable scope of the whitelist. The value of this parameter is in the JSON format and contains the following fields:
     *
     *   **type**: the type of the applicable scope. Valid values:
     *
     *   **GroupId**: the ID of a server group
     *   **Uuid**: the UUID of a server
     *
     *   **uuids**: the UUIDs of servers
     *
     *   **groupIds**: the IDs of server groups
     *
     * >  If you leave this parameter empty, all servers are added to the whitelist. If you set the **type** field to **GroupId**, you must also specify the **groupIds** field. If you set **type** to **Uuid**, you must specify the **uuids** parameter.
     * @example {"type":"GroupId","uuids":[],"groupIds":[10782678]}
     *
     * @var string
     */
    public $targetInfo;

    /**
     * @description The information about the vulnerability that you want to add to the whitelist. The value is a JSON string that contains the following fields:
     *
     *   **Status**: the status of the vulnerability.
     *
     *   **GmtLast**: the timestamp when the vulnerability was last detected. Unit: milliseconds.
     *
     *   **LaterCount**: the number of vulnerabilities that have the medium priority.
     *
     *   **AsapCount**: the number of vulnerabilities that have the high priority.
     *
     *   **Name**: the name of the vulnerability.
     *
     *   **Type**: the type of the vulnerability. Valid values:
     *
     *   **cve**: Linux software vulnerability
     *   **sys**: Windows system vulnerability
     *   **cms**: Web-CMS vulnerability
     *   **app**: application vulnerability
     *   **emg**: urgent vulnerability
     *
     *   **Related**: the Common Vulnerabilities and Exposures (CVE) ID of the vulnerability.
     *
     *   **HandledCount**: the number of handled vulnerabilities.
     *
     *   **AliasName**: the alias of the vulnerability.
     *
     *   **RuleModifyTime**: the time when the vulnerability was last disclosed.
     *
     *   **NntfCount**: the number of vulnerabilities that have the low priority.
     *
     *   **TotalFixCount**: the total number of fixed vulnerabilities.
     *
     *   **Tags**: the tag that is added to the vulnerability.
     *
     * This parameter is required.
     * @example [{"Status":0,"GmtLast":1662281929000,"LaterCount":0,"AsapCount":1,"Name":"oval:com.redhat.rhsa:def:20172836","Type":"cve","Related":"CVE-2017-14491,CVE-2017-14492,CVE-2017-14493,CVE-2017-14494,CVE-2017-14495,CVE-2017-14496","HandledCount":1,"AliasName":"RHSA-2017:2836-Critical: dnsmasq security update","RuleModifyTime":1535542395000,"NntfCount":0,"TotalFixCount":196668,"Tags":"Exploit Exists,Code Execution"},{"Status":0,"GmtLast":1662281933000,"LaterCount":0,"AsapCount":1,"Name":"oval:com.redhat.rhsa:def:20173075","Type":"cve","Related":"CVE-2017-13089,CVE-2017-13090","HandledCount":1,"AliasName":"RHSA-2017:3075-Important: wget security update","RuleModifyTime":1551432867000,"NntfCount":0,"TotalFixCount":369136,"Tags":"Code Execution"}]
     *
     * @var string
     */
    public $whitelist;
    protected $_name = [
        'reason'     => 'Reason',
        'targetInfo' => 'TargetInfo',
        'whitelist'  => 'Whitelist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->targetInfo) {
            $res['TargetInfo'] = $this->targetInfo;
        }
        if (null !== $this->whitelist) {
            $res['Whitelist'] = $this->whitelist;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCreateVulWhitelistRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['TargetInfo'])) {
            $model->targetInfo = $map['TargetInfo'];
        }
        if (isset($map['Whitelist'])) {
            $model->whitelist = $map['Whitelist'];
        }

        return $model;
    }
}
