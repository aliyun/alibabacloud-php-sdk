<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Dara\Model;

class ListProceedingsRequest extends Model
{
    /**
     * @var bool
     */
    public $filterFinished;
    protected $_name = [
        'filterFinished' => 'filterFinished',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filterFinished) {
            $res['filterFinished'] = $this->filterFinished;
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
        if (isset($map['filterFinished'])) {
            $model->filterFinished = $map['filterFinished'];
        }

        return $model;
    }
}
