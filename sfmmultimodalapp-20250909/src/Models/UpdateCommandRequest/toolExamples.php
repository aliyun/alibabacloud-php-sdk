<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateCommandRequest;

use AlibabaCloud\Dara\Model;

class toolExamples extends Model
{
    /**
     * @var string
     */
    public $query;
    protected $_name = [
        'query' => 'Query',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->query) {
            $res['Query'] = $this->query;
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
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        return $model;
    }
}
