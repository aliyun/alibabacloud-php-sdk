<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPrepaidCardsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPrepaidCardsResponseBody\data\prepaidCard;

class data extends Model
{
    /**
     * @var prepaidCard[]
     */
    public $prepaidCard;
    protected $_name = [
        'prepaidCard' => 'PrepaidCard',
    ];

    public function validate()
    {
        if (\is_array($this->prepaidCard)) {
            Model::validateArray($this->prepaidCard);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->prepaidCard) {
            if (\is_array($this->prepaidCard)) {
                $res['PrepaidCard'] = [];
                $n1 = 0;
                foreach ($this->prepaidCard as $item1) {
                    $res['PrepaidCard'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PrepaidCard'])) {
            if (!empty($map['PrepaidCard'])) {
                $model->prepaidCard = [];
                $n1 = 0;
                foreach ($map['PrepaidCard'] as $item1) {
                    $model->prepaidCard[$n1] = prepaidCard::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
