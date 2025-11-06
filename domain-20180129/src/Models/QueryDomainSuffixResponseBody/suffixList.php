<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainSuffixResponseBody;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->suffix)) {
            Model::validateArray($this->suffix);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->suffix) {
            if (\is_array($this->suffix)) {
                $res['Suffix'] = [];
                $n1 = 0;
                foreach ($this->suffix as $item1) {
                    $res['Suffix'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Suffix'])) {
            if (!empty($map['Suffix'])) {
                $model->suffix = [];
                $n1 = 0;
                foreach ($map['Suffix'] as $item1) {
                    $model->suffix[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
