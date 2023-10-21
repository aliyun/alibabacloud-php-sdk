<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListResponseBody\siteMonitors\siteMonitor\optionsJson\assertions;

use AlibabaCloud\Tea\Model;

class assertions extends Model
{
    /**
     * @description The comparison operator of the assertion. Valid values:
     *
     *   contains: contains
     *   doesNotContain: does not contain
     *   matches: matches regular expressions
     *   doesNotMatch: does not match regular expressions
     *   is: equal to a numeric value or matches a character
     *   isNot: not equal to
     *   lessThan: less than
     *   moreThan: greater than
     *
     * @example lessThan
     *
     * @var string
     */
    public $operator;

    /**
     * @description The parsing path of the assertion.
     *
     *   If the assertion type is `body_json`, the path is `json path`.
     *   If the assertion type is `body_xml`, the path is `xml path`.
     *
     * @example json path
     *
     * @var string
     */
    public $property;

    /**
     * @description The numeric value or character used for matching.
     *
     * @example 1000
     *
     * @var string
     */
    public $target;

    /**
     * @description The type of the assertion. Valid values:
     *
     *   response_time: checks whether the response time meets expectations.
     *   status_code: checks whether the HTTP status code meets expectations.
     *   header: checks whether the fields in the response header meet expectations.
     *   body_text: checks whether the content in the response body meets expectations by using text matching.
     *   body_json: checks whether the content in the response body meets expectations by using JSON parsing (JSONPath).
     *   body_xml: checks whether the content in the response body meets expectations by using XML parsing (XPath).
     *
     * @example response_time
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'operator' => 'operator',
        'property' => 'property',
        'target'   => 'target',
        'type'     => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
        }
        if (null !== $this->property) {
            $res['property'] = $this->property;
        }
        if (null !== $this->target) {
            $res['target'] = $this->target;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assertions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['operator'])) {
            $model->operator = $map['operator'];
        }
        if (isset($map['property'])) {
            $model->property = $map['property'];
        }
        if (isset($map['target'])) {
            $model->target = $map['target'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
