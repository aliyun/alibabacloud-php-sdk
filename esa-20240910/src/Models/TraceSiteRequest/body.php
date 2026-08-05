<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\TraceSiteRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var mixed
     */
    public $json;

    /**
     * @var string
     */
    public $plainText;
    protected $_name = [
        'json' => 'Json',
        'plainText' => 'PlainText',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->json) {
            $res['Json'] = $this->json;
        }

        if (null !== $this->plainText) {
            $res['PlainText'] = $this->plainText;
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
        if (isset($map['Json'])) {
            $model->json = $map['Json'];
        }

        if (isset($map['PlainText'])) {
            $model->plainText = $map['PlainText'];
        }

        return $model;
    }
}
