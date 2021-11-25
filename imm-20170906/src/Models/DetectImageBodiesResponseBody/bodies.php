<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\DetectImageBodiesResponseBody;

use AlibabaCloud\SDK\Imm\V20170906\Models\DetectImageBodiesResponseBody\bodies\bodyBoundary;
use AlibabaCloud\Tea\Model;

class bodies extends Model
{
    /**
     * @var bodyBoundary
     */
    public $bodyBoundary;

    /**
     * @var float
     */
    public $bodyConfidence;
    protected $_name = [
        'bodyBoundary'   => 'BodyBoundary',
        'bodyConfidence' => 'BodyConfidence',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bodyBoundary) {
            $res['BodyBoundary'] = null !== $this->bodyBoundary ? $this->bodyBoundary->toMap() : null;
        }
        if (null !== $this->bodyConfidence) {
            $res['BodyConfidence'] = $this->bodyConfidence;
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
        if (isset($map['BodyBoundary'])) {
            $model->bodyBoundary = bodyBoundary::fromMap($map['BodyBoundary']);
        }
        if (isset($map['BodyConfidence'])) {
            $model->bodyConfidence = $map['BodyConfidence'];
        }

        return $model;
    }
}
