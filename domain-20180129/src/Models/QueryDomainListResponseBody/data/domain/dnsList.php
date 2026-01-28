<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainListResponseBody\data\domain;

use AlibabaCloud\Dara\Model;

class dnsList extends Model
{
    /**
     * @var string[]
     */
    public $dnsList;
    protected $_name = [
        'dnsList' => 'DnsList',
    ];

    public function validate()
    {
        if (\is_array($this->dnsList)) {
            Model::validateArray($this->dnsList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dnsList) {
            if (\is_array($this->dnsList)) {
                $res['DnsList'] = [];
                $n1 = 0;
                foreach ($this->dnsList as $item1) {
                    $res['DnsList'][$n1] = $item1;
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
        if (isset($map['DnsList'])) {
            if (!empty($map['DnsList'])) {
                $model->dnsList = [];
                $n1 = 0;
                foreach ($map['DnsList'] as $item1) {
                    $model->dnsList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
