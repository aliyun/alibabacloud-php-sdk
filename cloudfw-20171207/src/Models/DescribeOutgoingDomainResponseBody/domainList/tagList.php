<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDomainResponseBody\domainList;

use AlibabaCloud\Tea\Model;

class tagList extends Model
{
    /**
     * @description 风险等级
     *
     * @var int
     */
    public $riskLevel;

    /**
     * @description 标签描述
     *
     * @var string
     */
    public $tagDescribe;

    /**
     * @description 标签ID
     *
     * @var string
     */
    public $tagId;

    /**
     * @description 标签名称
     *
     * @var string
     */
    public $tagName;
    protected $_name = [
        'riskLevel'   => 'RiskLevel',
        'tagDescribe' => 'TagDescribe',
        'tagId'       => 'TagId',
        'tagName'     => 'TagName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->tagDescribe) {
            $res['TagDescribe'] = $this->tagDescribe;
        }
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['TagDescribe'])) {
            $model->tagDescribe = $map['TagDescribe'];
        }
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }

        return $model;
    }
}
