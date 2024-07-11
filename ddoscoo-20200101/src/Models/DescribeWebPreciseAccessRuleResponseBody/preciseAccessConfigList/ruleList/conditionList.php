<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebPreciseAccessRuleResponseBody\preciseAccessConfigList\ruleList;

use AlibabaCloud\Tea\Model;

class conditionList extends Model
{
    /**
     * @description The match content.
     *
     * @example 1.1.1.1
     *
     * @var string
     */
    public $content;

    /**
     * @var string[]
     */
    public $contentList;

    /**
     * @description The match field.
     *
     * @example ip
     *
     * @var string
     */
    public $field;

    /**
     * @description The custom HTTP request header.
     *
     * >  This parameter takes effect only when **Field** is set to **header**.
     * @example null
     *
     * @var string
     */
    public $headerName;

    /**
     * @description The logical operator.
     *
     * @example belong
     *
     * @var string
     */
    public $matchMethod;
    protected $_name = [
        'content'     => 'Content',
        'contentList' => 'ContentList',
        'field'       => 'Field',
        'headerName'  => 'HeaderName',
        'matchMethod' => 'MatchMethod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->contentList) {
            $res['ContentList'] = $this->contentList;
        }
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }
        if (null !== $this->headerName) {
            $res['HeaderName'] = $this->headerName;
        }
        if (null !== $this->matchMethod) {
            $res['MatchMethod'] = $this->matchMethod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContentList'])) {
            if (!empty($map['ContentList'])) {
                $model->contentList = $map['ContentList'];
            }
        }
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }
        if (isset($map['HeaderName'])) {
            $model->headerName = $map['HeaderName'];
        }
        if (isset($map['MatchMethod'])) {
            $model->matchMethod = $map['MatchMethod'];
        }

        return $model;
    }
}
