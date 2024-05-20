<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class IllustrationResult extends Model
{
    /**
     * @var Illustration
     */
    public $illustration;

    /**
     * @example 3239281273464326823
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'illustration' => 'illustration',
        'requestId'    => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->illustration) {
            $res['illustration'] = null !== $this->illustration ? $this->illustration->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IllustrationResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['illustration'])) {
            $model->illustration = Illustration::fromMap($map['illustration']);
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
