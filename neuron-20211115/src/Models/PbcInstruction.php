<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PbcInstruction extends Model
{
    /**
     * @var string
     */
    public $document;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $pbcVersionId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'document' => 'document',
        'id' => 'id',
        'pbcVersionId' => 'pbcVersionId',
        'requestId' => 'requestId',
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

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->pbcVersionId) {
            $res['pbcVersionId'] = $this->pbcVersionId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['pbcVersionId'])) {
            $model->pbcVersionId = $map['pbcVersionId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
