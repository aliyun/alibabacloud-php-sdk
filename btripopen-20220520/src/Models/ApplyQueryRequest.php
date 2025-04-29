<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class ApplyQueryRequest extends Model
{
    /**
     * @var int
     */
    public $applyId;

    /**
     * @var string
     */
    public $applyShowId;

    /**
     * @var string
     */
    public $subCorpId;

    /**
     * @var string
     */
    public $thirdpartApplyId;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'applyId' => 'apply_id',
        'applyShowId' => 'apply_show_id',
        'subCorpId' => 'sub_corp_id',
        'thirdpartApplyId' => 'thirdpart_apply_id',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }

        if (null !== $this->applyShowId) {
            $res['apply_show_id'] = $this->applyShowId;
        }

        if (null !== $this->subCorpId) {
            $res['sub_corp_id'] = $this->subCorpId;
        }

        if (null !== $this->thirdpartApplyId) {
            $res['thirdpart_apply_id'] = $this->thirdpartApplyId;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['apply_id'])) {
            $model->applyId = $map['apply_id'];
        }

        if (isset($map['apply_show_id'])) {
            $model->applyShowId = $map['apply_show_id'];
        }

        if (isset($map['sub_corp_id'])) {
            $model->subCorpId = $map['sub_corp_id'];
        }

        if (isset($map['thirdpart_apply_id'])) {
            $model->thirdpartApplyId = $map['thirdpart_apply_id'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
