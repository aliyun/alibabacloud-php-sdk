<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimStandardListResponseBody;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimStandardListResponseBody\datas\architecture;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimStandardListResponseBody\datas\structure;
use AlibabaCloud\Tea\Model;

class datas extends Model
{
    /**
     * @var architecture
     */
    public $architecture;

    /**
     * @var string
     */
    public $buildingNo;

    /**
     * @var structure
     */
    public $structure;
    protected $_name = [
        'architecture' => 'Architecture',
        'buildingNo'   => 'BuildingNo',
        'structure'    => 'Structure',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['Architecture'] = null !== $this->architecture ? $this->architecture->toMap() : null;
        }
        if (null !== $this->buildingNo) {
            $res['BuildingNo'] = $this->buildingNo;
        }
        if (null !== $this->structure) {
            $res['Structure'] = null !== $this->structure ? $this->structure->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return datas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Architecture'])) {
            $model->architecture = architecture::fromMap($map['Architecture']);
        }
        if (isset($map['BuildingNo'])) {
            $model->buildingNo = $map['BuildingNo'];
        }
        if (isset($map['Structure'])) {
            $model->structure = structure::fromMap($map['Structure']);
        }

        return $model;
    }
}
