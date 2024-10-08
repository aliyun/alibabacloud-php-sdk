<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class TransformMatchToExpressionShrinkRequest extends Model
{
    /**
     * @example http_bot
     *
     * @var string
     */
    public $matchShrink;

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
        'matchShrink' => 'Match',
        'phase'       => 'Phase',
        'siteId'      => 'SiteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->matchShrink) {
            $res['Match'] = $this->matchShrink;
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
     * @return TransformMatchToExpressionShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Match'])) {
            $model->matchShrink = $map['Match'];
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
