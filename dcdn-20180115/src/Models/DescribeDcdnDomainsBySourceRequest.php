<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainsBySourceRequest extends Model
{
    /**
     * @example example.org
     *
     * @var string
     */
    public $sources;
    protected $_name = [
        'sources' => 'Sources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sources) {
            $res['Sources'] = $this->sources;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnDomainsBySourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Sources'])) {
            $model->sources = $map['Sources'];
        }

        return $model;
    }
}
