<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PbcInstructionUpdateCmd extends Model
{
    /**
     * @var string
     */
    public $document;

    /**
     * @var int
     */
    public $pbcVersionId;
    protected $_name = [
        'document' => 'document',
        'pbcVersionId' => 'pbcVersionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->document) {
            $res['document'] = $this->document;
        }

        if (null !== $this->pbcVersionId) {
            $res['pbcVersionId'] = $this->pbcVersionId;
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
        if (isset($map['document'])) {
            $model->document = $map['document'];
        }

        if (isset($map['pbcVersionId'])) {
            $model->pbcVersionId = $map['pbcVersionId'];
        }

        return $model;
    }
}
