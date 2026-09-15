<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaasQIService\V20260831\Models\PaChatCompletionStreamRequest;

use AlibabaCloud\Dara\Model;

class streamOptions extends Model
{
    /**
     * @var bool
     */
    public $includeUsage;
    protected $_name = [
        'includeUsage' => 'includeUsage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->includeUsage) {
            $res['includeUsage'] = $this->includeUsage;
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
        if (isset($map['includeUsage'])) {
            $model->includeUsage = $map['includeUsage'];
        }

        return $model;
    }
}
