<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class CreateLibraryInstructionRequest extends Model
{
    /**
     * @var int
     */
    public $companyId;

    /**
     * @var string
     */
    public $document;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $libraryId;

    /**
     * @var int
     */
    public $marketId;
    protected $_name = [
        'companyId' => 'companyId',
        'document' => 'document',
        'id' => 'id',
        'libraryId' => 'libraryId',
        'marketId' => 'marketId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->companyId) {
            $res['companyId'] = $this->companyId;
        }

        if (null !== $this->document) {
            $res['document'] = $this->document;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->libraryId) {
            $res['libraryId'] = $this->libraryId;
        }

        if (null !== $this->marketId) {
            $res['marketId'] = $this->marketId;
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
        if (isset($map['companyId'])) {
            $model->companyId = $map['companyId'];
        }

        if (isset($map['document'])) {
            $model->document = $map['document'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['libraryId'])) {
            $model->libraryId = $map['libraryId'];
        }

        if (isset($map['marketId'])) {
            $model->marketId = $map['marketId'];
        }

        return $model;
    }
}
