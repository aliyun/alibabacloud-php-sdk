<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\AddVirusScanAdditionalListsRequest\additionalLists;

class AddVirusScanAdditionalListsRequest extends Model
{
    /**
     * @var additionalLists[]
     */
    public $additionalLists;

    /**
     * @var string
     */
    public $devType;
    protected $_name = [
        'additionalLists' => 'AdditionalLists',
        'devType' => 'DevType',
    ];

    public function validate()
    {
        if (\is_array($this->additionalLists)) {
            Model::validateArray($this->additionalLists);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->additionalLists) {
            if (\is_array($this->additionalLists)) {
                $res['AdditionalLists'] = [];
                $n1 = 0;
                foreach ($this->additionalLists as $item1) {
                    $res['AdditionalLists'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->devType) {
            $res['DevType'] = $this->devType;
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
        if (isset($map['AdditionalLists'])) {
            if (!empty($map['AdditionalLists'])) {
                $model->additionalLists = [];
                $n1 = 0;
                foreach ($map['AdditionalLists'] as $item1) {
                    $model->additionalLists[$n1] = additionalLists::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DevType'])) {
            $model->devType = $map['DevType'];
        }

        return $model;
    }
}
