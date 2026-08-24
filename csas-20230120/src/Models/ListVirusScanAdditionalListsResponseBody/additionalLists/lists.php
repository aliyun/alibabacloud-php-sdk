<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListVirusScanAdditionalListsResponseBody\additionalLists;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListVirusScanAdditionalListsResponseBody\additionalLists\lists\listDetail;

class lists extends Model
{
    /**
     * @var listDetail[]
     */
    public $listDetail;

    /**
     * @var string
     */
    public $listType;
    protected $_name = [
        'listDetail' => 'ListDetail',
        'listType' => 'ListType',
    ];

    public function validate()
    {
        if (\is_array($this->listDetail)) {
            Model::validateArray($this->listDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listDetail) {
            if (\is_array($this->listDetail)) {
                $res['ListDetail'] = [];
                $n1 = 0;
                foreach ($this->listDetail as $item1) {
                    $res['ListDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->listType) {
            $res['ListType'] = $this->listType;
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
        if (isset($map['ListDetail'])) {
            if (!empty($map['ListDetail'])) {
                $model->listDetail = [];
                $n1 = 0;
                foreach ($map['ListDetail'] as $item1) {
                    $model->listDetail[$n1] = listDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ListType'])) {
            $model->listType = $map['ListType'];
        }

        return $model;
    }
}
