<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetTranscodeJobRequest extends Model
{
    /**
     * @example ab4802364a2e49208c99efab82dfa8e8
     *
     * @var string
     */
    public $parentJobId;
    protected $_name = [
        'parentJobId' => 'ParentJobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parentJobId) {
            $res['ParentJobId'] = $this->parentJobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTranscodeJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParentJobId'])) {
            $model->parentJobId = $map['ParentJobId'];
        }

        return $model;
    }
}
