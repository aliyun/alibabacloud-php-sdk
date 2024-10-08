<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class TransformMatchToExpressionRequest extends Model
{
    /**
     * @example http_bot
     *
     * @var WafRuleMatch
     */
    public $match;

    /**
     * @example http_bot
     *
     * @var string
     */
    public $phase;

    /**
     * @example 1
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'match'  => 'Match',
        'phase'  => 'Phase',
        'siteId' => 'SiteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->match) {
            $res['Match'] = null !== $this->match ? $this->match->toMap() : null;
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
     * @return TransformMatchToExpressionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Match'])) {
            $model->match = WafRuleMatch::fromMap($map['Match']);
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
