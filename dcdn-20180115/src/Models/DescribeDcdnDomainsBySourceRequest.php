<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;

class DescribeDcdnDomainsBySourceRequest extends Model
{
    /**
     * @var string
     */
    public $sources;
    protected $_name = [
        'sources' => 'Sources',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sources) {
            $res['Sources'] = $this->sources;
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
        if (isset($map['Sources'])) {
            $model->sources = $map['Sources'];
        }

        return $model;
    }
}
