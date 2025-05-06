<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractRuleGenerationRequest\assistant;

use AlibabaCloud\Dara\Model;

class metaData extends Model
{
    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $position;
    protected $_name = [
        'fileId' => 'fileId',
        'position' => 'position',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['fileId'] = $this->fileId;
        }

        if (null !== $this->position) {
            $res['position'] = $this->position;
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
        if (isset($map['fileId'])) {
            $model->fileId = $map['fileId'];
        }

        if (isset($map['position'])) {
            $model->position = $map['position'];
        }

        return $model;
    }
}
