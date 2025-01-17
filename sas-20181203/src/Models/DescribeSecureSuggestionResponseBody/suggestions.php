<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecureSuggestionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecureSuggestionResponseBody\suggestions\detail;

class suggestions extends Model
{
    /**
     * @var detail[]
     */
    public $detail;
    /**
     * @var int
     */
    public $points;
    /**
     * @var string
     */
    public $suggestType;
    protected $_name = [
        'detail'      => 'Detail',
        'points'      => 'Points',
        'suggestType' => 'SuggestType',
    ];

    public function validate()
    {
        if (\is_array($this->detail)) {
            Model::validateArray($this->detail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detail) {
            if (\is_array($this->detail)) {
                $res['Detail'] = [];
                $n1            = 0;
                foreach ($this->detail as $item1) {
                    $res['Detail'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->points) {
            $res['Points'] = $this->points;
        }

        if (null !== $this->suggestType) {
            $res['SuggestType'] = $this->suggestType;
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
        if (isset($map['Detail'])) {
            if (!empty($map['Detail'])) {
                $model->detail = [];
                $n1            = 0;
                foreach ($map['Detail'] as $item1) {
                    $model->detail[$n1++] = detail::fromMap($item1);
                }
            }
        }

        if (isset($map['Points'])) {
            $model->points = $map['Points'];
        }

        if (isset($map['SuggestType'])) {
            $model->suggestType = $map['SuggestType'];
        }

        return $model;
    }
}
