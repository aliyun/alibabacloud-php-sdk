<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFrontVulPatchListResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFrontVulPatchListResponseBody\frontPatchList\patchList;
use AlibabaCloud\Tea\Model;

class frontPatchList extends Model
{
    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var patchList[]
     */
    public $patchList;
    protected $_name = [
        'desktopId' => 'DesktopId',
        'patchList' => 'PatchList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->patchList) {
            $res['PatchList'] = [];
            if (null !== $this->patchList && \is_array($this->patchList)) {
                $n = 0;
                foreach ($this->patchList as $item) {
                    $res['PatchList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['PatchList'])) {
            if (!empty($map['PatchList'])) {
                $model->patchList = [];
                $n                = 0;
                foreach ($map['PatchList'] as $item) {
                    $model->patchList[$n++] = null !== $item ? patchList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
