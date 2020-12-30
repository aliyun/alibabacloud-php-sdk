<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainSuffixResponseBody;

use AlibabaCloud\Tea\Model;

class suffixList extends Model
{
    /**
     * @var string[]
     */
    public $suffix;
    protected $_name = [
        'suffix' => 'Suffix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->suffix) {
            $res['Suffix'] = $this->suffix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return suffixList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Suffix'])) {
            if (!empty($map['Suffix'])) {
                $model->suffix = $map['Suffix'];
            }
        }

        return $model;
    }
}
