<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class BatchGetExpressionFieldsShrinkRequest extends Model
{
    /**
     * @description The regular expressions.
     *
     * @example http_bot
     *
     * @var string
     */
    public $expressionsShrink;

    /**
     * @description The WAF rule category.
     *
     * @example http_bot
     *
     * @var string
     */
    public $phase;

    /**
     * @description The website ID.
     *
     * @example 1
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'expressionsShrink' => 'Expressions',
        'phase' => 'Phase',
        'siteId' => 'SiteId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->expressionsShrink) {
            $res['Expressions'] = $this->expressionsShrink;
        }
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGetExpressionFieldsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Expressions'])) {
            $model->expressionsShrink = $map['Expressions'];
        }
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
