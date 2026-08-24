<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListVirusScanAdditionalListsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListVirusScanAdditionalListsResponseBody\additionalLists\lists;

class additionalLists extends Model
{
    /**
     * @var string
     */
    public $additionalType;

    /**
     * @var lists[]
     */
    public $lists;
    protected $_name = [
        'additionalType' => 'AdditionalType',
        'lists' => 'Lists',
    ];

    public function validate()
    {
        if (\is_array($this->lists)) {
            Model::validateArray($this->lists);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->additionalType) {
            $res['AdditionalType'] = $this->additionalType;
        }

        if (null !== $this->lists) {
            if (\is_array($this->lists)) {
                $res['Lists'] = [];
                $n1 = 0;
                foreach ($this->lists as $item1) {
                    $res['Lists'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AdditionalType'])) {
            $model->additionalType = $map['AdditionalType'];
        }

        if (isset($map['Lists'])) {
            if (!empty($map['Lists'])) {
                $model->lists = [];
                $n1 = 0;
                foreach ($map['Lists'] as $item1) {
                    $model->lists[$n1] = lists::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
