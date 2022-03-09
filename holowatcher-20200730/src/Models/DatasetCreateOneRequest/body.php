<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetCreateOneRequest;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetCreateOneRequest\body\note;
use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var note
     */
    public $note;

    /**
     * @var int
     */
    public $typeId;
    protected $_name = [
        'bizType' => 'BizType',
        'note'    => 'Note',
        'typeId'  => 'TypeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->note) {
            $res['Note'] = null !== $this->note ? $this->note->toMap() : null;
        }
        if (null !== $this->typeId) {
            $res['TypeId'] = $this->typeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['Note'])) {
            $model->note = note::fromMap($map['Note']);
        }
        if (isset($map['TypeId'])) {
            $model->typeId = $map['TypeId'];
        }

        return $model;
    }
}
