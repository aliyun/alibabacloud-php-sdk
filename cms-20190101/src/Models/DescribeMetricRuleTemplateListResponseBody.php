<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateListResponseBody\templates;
use AlibabaCloud\Tea\Model;

class DescribeMetricRuleTemplateListResponseBody extends Model
{
    /**
     * @description The timestamp when the alert template was applied to the application group.
     *
     * Unit: milliseconds.
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The list of alert templates.
     *
     * @example The Request is not authorization.
     *
     * @var string
     */
    public $message;

    /**
     * @description The total number of returned entries.
     *
     * @example 659401C0-6214-5C02-972A-CFA929D717B7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The keyword of the alert template name.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The ID of the alert template.
     *
     * @var templates
     */
    public $templates;

    /**
     * @description The sorting basis. Default value: gmtCreate. Valid values:
     *
     *   gmtMotified: Sorts alert templates by modification time.
     *   gmtCreate: Sorts alert templates by creation time.
     *
     * @example 2
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'templates' => 'Templates',
        'total'     => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->templates) {
            $res['Templates'] = null !== $this->templates ? $this->templates->toMap() : null;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMetricRuleTemplateListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Templates'])) {
            $model->templates = templates::fromMap($map['Templates']);
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
