<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\CorpAuthLinkInfoQueryResponseBody\module;

use AlibabaCloud\Dara\Model;

class orgCorp extends Model
{
    /**
     * @var string
     */
    public $corpName;

    /**
     * @var string
     */
    public $openCorpId;

    /**
     * @var string
     */
    public $trueCorpId;
    protected $_name = [
        'corpName' => 'corp_name',
        'openCorpId' => 'open_corp_id',
        'trueCorpId' => 'true_corp_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->corpName) {
            $res['corp_name'] = $this->corpName;
        }

        if (null !== $this->openCorpId) {
            $res['open_corp_id'] = $this->openCorpId;
        }

        if (null !== $this->trueCorpId) {
            $res['true_corp_id'] = $this->trueCorpId;
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
        if (isset($map['corp_name'])) {
            $model->corpName = $map['corp_name'];
        }

        if (isset($map['open_corp_id'])) {
            $model->openCorpId = $map['open_corp_id'];
        }

        if (isset($map['true_corp_id'])) {
            $model->trueCorpId = $map['true_corp_id'];
        }

        return $model;
    }
}
