<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckStructureResponseBody\checkStructureResponse\standards;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckStructureResponseBody\checkStructureResponse\standards\requirements\sections;
use AlibabaCloud\Tea\Model;

class requirements extends Model
{
    /**
     * @description The ID of the requirement item for the check item.
     *
     * @example 46
     *
     * @var int
     */
    public $id;

    /**
     * @description The information about the sections of check items.
     *
     * @var sections[]
     */
    public $sections;

    /**
     * @description The display name of the requirement item for the check item.
     *
     * @example Networking
     *
     * @var string
     */
    public $showName;

    /**
     * @description The total number of check items for the requirement.
     *
     * @example 36
     *
     * @var int
     */
    public $totalCheckCount;
    protected $_name = [
        'id' => 'Id',
        'sections' => 'Sections',
        'showName' => 'ShowName',
        'totalCheckCount' => 'TotalCheckCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->sections) {
            $res['Sections'] = [];
            if (null !== $this->sections && \is_array($this->sections)) {
                $n = 0;
                foreach ($this->sections as $item) {
                    $res['Sections'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }
        if (null !== $this->totalCheckCount) {
            $res['TotalCheckCount'] = $this->totalCheckCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requirements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Sections'])) {
            if (!empty($map['Sections'])) {
                $model->sections = [];
                $n = 0;
                foreach ($map['Sections'] as $item) {
                    $model->sections[$n++] = null !== $item ? sections::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }
        if (isset($map['TotalCheckCount'])) {
            $model->totalCheckCount = $map['TotalCheckCount'];
        }

        return $model;
    }
}
