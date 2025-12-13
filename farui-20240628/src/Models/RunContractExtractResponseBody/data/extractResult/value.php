<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractExtractResponseBody\data\extractResult;

use AlibabaCloud\Dara\Model;

class value extends Model
{
    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $originalText;
    protected $_name = [
        'data' => 'data',
        'originalText' => 'originalText',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }

        if (null !== $this->originalText) {
            $res['originalText'] = $this->originalText;
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
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }

        if (isset($map['originalText'])) {
            $model->originalText = $map['originalText'];
        }

        return $model;
    }
}
