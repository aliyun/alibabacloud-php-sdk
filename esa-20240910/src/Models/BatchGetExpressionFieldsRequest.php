<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\BatchGetExpressionFieldsRequest\expressions;
use AlibabaCloud\Tea\Model;

class BatchGetExpressionFieldsRequest extends Model
{
    /**
     * @description The regular expressions.
     *
     * @example http_bot
     *
     * @var expressions[]
     */
    public $expressions;

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
        'expressions' => 'Expressions',
        'phase'       => 'Phase',
        'siteId'      => 'SiteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expressions) {
            $res['Expressions'] = [];
            if (null !== $this->expressions && \is_array($this->expressions)) {
                $n = 0;
                foreach ($this->expressions as $item) {
                    $res['Expressions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return BatchGetExpressionFieldsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Expressions'])) {
            if (!empty($map['Expressions'])) {
                $model->expressions = [];
                $n                  = 0;
                foreach ($map['Expressions'] as $item) {
                    $model->expressions[$n++] = null !== $item ? expressions::fromMap($item) : $item;
                }
            }
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
