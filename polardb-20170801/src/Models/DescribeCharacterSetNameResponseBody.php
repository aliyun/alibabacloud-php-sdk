<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeCharacterSetNameResponseBody\characterSetNameItems;
use AlibabaCloud\Tea\Model;

class DescribeCharacterSetNameResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var characterSetNameItems
     */
    public $characterSetNameItems;

    /**
     * @var string
     */
    public $engine;
    protected $_name = [
        'requestId'             => 'RequestId',
        'characterSetNameItems' => 'CharacterSetNameItems',
        'engine'                => 'Engine',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->characterSetNameItems) {
            $res['CharacterSetNameItems'] = null !== $this->characterSetNameItems ? $this->characterSetNameItems->toMap() : null;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCharacterSetNameResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CharacterSetNameItems'])) {
            $model->characterSetNameItems = characterSetNameItems::fromMap($map['CharacterSetNameItems']);
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        return $model;
    }
}
