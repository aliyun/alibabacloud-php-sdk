<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebPreciseAccessRuleResponseBody\preciseAccessConfigList\ruleList;

use AlibabaCloud\Tea\Model;

class conditionList extends Model
{
    /**
     * @var string
     */
    public $matchMethod;

    /**
     * @var string
     */
    public $field;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $headerName;
    protected $_name = [
        'matchMethod' => 'MatchMethod',
        'field'       => 'Field',
        'content'     => 'Content',
        'headerName'  => 'HeaderName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->matchMethod) {
            $res['MatchMethod'] = $this->matchMethod;
        }
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->headerName) {
            $res['HeaderName'] = $this->headerName;
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
        if (isset($map['MatchMethod'])) {
            $model->matchMethod = $map['MatchMethod'];
        }
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['HeaderName'])) {
            $model->headerName = $map['HeaderName'];
        }

        return $model;
    }
}
