<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCCRulesV2ResponseBody\webCCRules\ruleDetail;

use AlibabaCloud\Dara\Model;

class condition extends Model
{
    /**
     * @var string
     */
    public $content;
    /**
     * @var string
     */
    public $contentList;
    /**
     * @var string
     */
    public $field;
    /**
     * @var string
     */
    public $headerName;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['ContentList'])) {
            $model->contentList = $map['ContentList'];
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
