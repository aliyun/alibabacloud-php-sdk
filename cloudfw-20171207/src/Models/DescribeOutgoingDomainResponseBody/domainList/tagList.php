<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDomainResponseBody\domainList;

use AlibabaCloud\Tea\Model;

class tagList extends Model
{
    /**
     * @description The type of the tag. Valid values:
     *
     *   **Suspicious**
     *   **Malicious**
     *   **Trusted**
     *
     * @example Trusted
     *
     * @var string
     */
    public $classId;

    /**
     * @description The risk level. Valid values:
     *
     *   **1**: low
     *   **2**: medium
     *   **3**: high
     *
     * @example 3
     *
     * @var int
     */
    public $riskLevel;

    /**
     * @description The description of the tag.
     *
     * @example White list
     *
     * @var string
     */
    public $tagDescribe;

    /**
     * @description The ID of the tag.
     *
     * @example 123****
     *
     * @var string
     */
    public $tagId;

    /**
     * @description The name of the tag.
     *
     * @example Whitelist
     *
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
