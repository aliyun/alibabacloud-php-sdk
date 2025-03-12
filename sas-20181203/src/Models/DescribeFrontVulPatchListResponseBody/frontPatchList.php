<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeFrontVulPatchListResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeFrontVulPatchListResponseBody\frontPatchList\patchList;
use AlibabaCloud\Tea\Model;

class frontPatchList extends Model
{
    /**
     * @description An array consisting of the pre-patches that are required to fix the specified Windows system vulnerability on the server.
     *
     * @var patchList[]
     */
    public $patchList;

    /**
     * @description The UUID of the server.
     *
     * @example 1587bedb-fdb4-48c4-9330-4545****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'patchList' => 'PatchList',
        'uuid'      => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->patchList) {
            $res['PatchList'] = [];
            if (null !== $this->patchList && \is_array($this->patchList)) {
                $n = 0;
                foreach ($this->patchList as $item) {
                    $res['PatchList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return frontPatchList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PatchList'])) {
            if (!empty($map['PatchList'])) {
                $model->patchList = [];
                $n                = 0;
                foreach ($map['PatchList'] as $item) {
                    $model->patchList[$n++] = null !== $item ? patchList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
