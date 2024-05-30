<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCCRulesV2ResponseBody\webCCRules\ruleDetail;

use AlibabaCloud\Tea\Model;

class condition extends Model
{
    /**
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $content;

    /**
     * @example ip
     *
     * @var string
     */
    public $field;

    /**
     * @example null
     *
     * @var string
     */
    public $headerName;

    /**
     * @example belong
     *
     * @var string
     */
    public $matchMethod;
    protected $_name = [
        'content'     => 'Content',
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
     * @return condition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
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
