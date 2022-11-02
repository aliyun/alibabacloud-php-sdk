<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeMajorProtectionBlackIpsResponseBody;

use AlibabaCloud\Tea\Model;

class ipList extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $expiredTime;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var int
     */
    public $ruleId;

    /**
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
