<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class QueryCorpDetailInfoRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example btripxxxxxx
     *
     * @var string
     */
    public $targetCorpId;
    protected $_name = [
        'targetCorpId' => 'target_corp_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetCorpId) {
            $res['target_corp_id'] = $this->targetCorpId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCorpDetailInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['target_corp_id'])) {
            $model->targetCorpId = $map['target_corp_id'];
        }

        return $model;
    }
}
