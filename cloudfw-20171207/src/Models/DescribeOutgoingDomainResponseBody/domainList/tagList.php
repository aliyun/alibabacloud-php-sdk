<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDomainResponseBody\domainList;

use AlibabaCloud\Tea\Model;

class tagList extends Model
{
    /**
     * @var string
     */
    public $classId;

    /**
     * @var int
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $tagDescribe;

    /**
     * @var string
     */
    public $tagId;

    /**
     * @var string
     */
    public $tagName;
    protected $_name = [
        'classId'     => 'ClassId',
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
        if (null !== $this->classId) {
            $res['ClassId'] = $this->classId;
        }
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
        if (isset($map['ClassId'])) {
            $model->classId = $map['ClassId'];
        }
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
