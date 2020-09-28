<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPvOpAdjustValuesResponse\data\pvopAdjustDataInfo;

use AlibabaCloud\Tea\Model;

class pv extends Model
{
    /**
     * @var float
     */
    public $xlabel;

    /**
     * @var float
     */
    public $ylabel;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $quality;
    protected $_name = [
        'xlabel'  => 'Xlabel',
        'ylabel'  => 'Ylabel',
        'name'    => 'Name',
        'quality' => 'Quality',
    ];

    public function validate()
    {
        Model::validateRequired('xlabel', $this->xlabel, true);
        Model::validateRequired('ylabel', $this->ylabel, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('quality', $this->quality, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->xlabel) {
            $res['Xlabel'] = $this->xlabel;
        }
        if (null !== $this->ylabel) {
            $res['Ylabel'] = $this->ylabel;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->quality) {
            $res['Quality'] = $this->quality;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pv
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Xlabel'])) {
            $model->xlabel = $map['Xlabel'];
        }
        if (isset($map['Ylabel'])) {
            $model->ylabel = $map['Ylabel'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Quality'])) {
            $model->quality = $map['Quality'];
        }

        return $model;
    }
}
