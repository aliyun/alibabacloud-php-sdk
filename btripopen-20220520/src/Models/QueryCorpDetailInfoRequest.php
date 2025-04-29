<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class QueryCorpDetailInfoRequest extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $targetCorpId;

    /**
     * @var string
     */
    public $targetThirdCorpId;
    protected $_name = [
        'accountId' => 'account_id',
        'targetCorpId' => 'target_corp_id',
        'targetThirdCorpId' => 'target_third_corp_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['account_id'] = $this->accountId;
        }

        if (null !== $this->targetCorpId) {
            $res['target_corp_id'] = $this->targetCorpId;
        }

        if (null !== $this->targetThirdCorpId) {
            $res['target_third_corp_id'] = $this->targetThirdCorpId;
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
        if (isset($map['account_id'])) {
            $model->accountId = $map['account_id'];
        }

        if (isset($map['target_corp_id'])) {
            $model->targetCorpId = $map['target_corp_id'];
        }

        if (isset($map['target_third_corp_id'])) {
            $model->targetThirdCorpId = $map['target_third_corp_id'];
        }

        return $model;
    }
}
