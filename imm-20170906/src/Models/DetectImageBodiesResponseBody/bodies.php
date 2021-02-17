<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\DetectImageBodiesResponseBody;

use AlibabaCloud\SDK\Imm\V20170906\Models\DetectImageBodiesResponseBody\bodies\bodyBoundary;
use AlibabaCloud\Tea\Model;

class bodies extends Model
{
    /**
     * @var float
     */
    public $bodyConfidence;

    /**
     * @var bodyBoundary
     */
    public $bodyBoundary;
    protected $_name = [
        'bodyConfidence' => 'BodyConfidence',
        'bodyBoundary'   => 'BodyBoundary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bodyConfidence) {
            $res['BodyConfidence'] = $this->bodyConfidence;
        }
        if (null !== $this->bodyBoundary) {
            $res['BodyBoundary'] = null !== $this->bodyBoundary ? $this->bodyBoundary->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bodies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BodyConfidence'])) {
            $model->bodyConfidence = $map['BodyConfidence'];
        }
        if (isset($map['BodyBoundary'])) {
            $model->bodyBoundary = bodyBoundary::fromMap($map['BodyBoundary']);
        }

        return $model;
    }
}
