<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdc\V20180821\Models;

use AlibabaCloud\Tea\Model;

class GetJoinCodeRequest extends Model
{
    /**
     * @var string
     */
    public $corpIdentifier;
    protected $_name = [
        'corpIdentifier' => 'CorpIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpIdentifier) {
            $res['CorpIdentifier'] = $this->corpIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJoinCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpIdentifier'])) {
            $model->corpIdentifier = $map['CorpIdentifier'];
        }

        return $model;
    }
}
