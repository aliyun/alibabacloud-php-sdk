<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeMajorProtectionBlackIpsResponseBody;

use AlibabaCloud\Tea\Model;

class ipList extends Model
{
    /**
     * @description The description of the IP address in the blacklist.
     *
     * @example test0003asdffas
     *
     * @var string
     */
    public $description;

    /**
     * @description The time after which the IP address blacklist becomes invalid. Unit: seconds.
     *
     * >  If the value of this parameter is **0**, the blacklist is permanently valid.
     * @example 1662603328
     *
     * @var int
     */
    public $expiredTime;

    /**
     * @description The most recent time when the IP address blacklist was modified.
     *
     * @example 1665456202000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description The IP address in the IP address blacklist.
     *
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The ID of the IP address blacklist rule for major event protection.
     *
     * @example 8508970
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The ID of the rule template for major event protection.
     *
     * @example 9684
     *
     * @var int
     */
    public $templateId;
    protected $_name = [
        'description' => 'Description',
        'expiredTime' => 'ExpiredTime',
        'gmtModified' => 'GmtModified',
        'ip'          => 'Ip',
        'ruleId'      => 'RuleId',
        'templateId'  => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
