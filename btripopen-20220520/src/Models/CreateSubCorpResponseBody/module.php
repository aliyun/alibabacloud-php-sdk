<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\CreateSubCorpResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $subCorpId;
    protected $_name = [
        'subCorpId' => 'sub_corp_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subCorpId) {
            $res['sub_corp_id'] = $this->subCorpId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['sub_corp_id'])) {
            $model->subCorpId = $map['sub_corp_id'];
        }

        return $model;
    }
}
