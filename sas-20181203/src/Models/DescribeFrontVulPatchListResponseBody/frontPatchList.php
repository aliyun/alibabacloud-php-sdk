<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeFrontVulPatchListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeFrontVulPatchListResponseBody\frontPatchList\patchList;

class frontPatchList extends Model
{
    /**
     * @var patchList[]
     */
    public $patchList;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'patchList' => 'PatchList',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        if (\is_array($this->patchList)) {
            Model::validateArray($this->patchList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->patchList) {
            if (\is_array($this->patchList)) {
                $res['PatchList'] = [];
                $n1 = 0;
                foreach ($this->patchList as $item1) {
                    $res['PatchList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['PatchList'])) {
            if (!empty($map['PatchList'])) {
                $model->patchList = [];
                $n1 = 0;
                foreach ($map['PatchList'] as $item1) {
                    $model->patchList[$n1] = patchList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
