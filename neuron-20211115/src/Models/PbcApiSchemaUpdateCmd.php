<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PbcApiSchemaUpdateCmd extends Model
{
    /**
     * @var string
     */
    public $apiSchema;

    /**
     * @var int
     */
    public $pbcVersionId;
    protected $_name = [
        'apiSchema' => 'apiSchema',
        'pbcVersionId' => 'pbcVersionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiSchema) {
            $res['apiSchema'] = $this->apiSchema;
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
        if (isset($map['apiSchema'])) {
            $model->apiSchema = $map['apiSchema'];
        }

        if (isset($map['pbcVersionId'])) {
            $model->pbcVersionId = $map['pbcVersionId'];
        }

        return $model;
    }
}
