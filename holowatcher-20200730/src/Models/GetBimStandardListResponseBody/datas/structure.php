<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimStandardListResponseBody\datas;

use AlibabaCloud\Tea\Model;

class structure extends Model
{
    /**
     * @var mixed[][]
     */
    public $detail;

    /**
     * @var mixed[][]
     */
    public $elevation;

    /**
     * @var mixed[][]
     */
    public $plan;

    /**
     * @var mixed[][]
     */
    public $sample;
    protected $_name = [
        'detail'    => 'Detail',
        'elevation' => 'Elevation',
        'plan'      => 'Plan',
        'sample'    => 'Sample',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->elevation) {
            $res['Elevation'] = $this->elevation;
        }
        if (null !== $this->plan) {
            $res['Plan'] = $this->plan;
        }
        if (null !== $this->sample) {
            $res['Sample'] = $this->sample;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return structure
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detail'])) {
            if (!empty($map['Detail'])) {
                $model->detail = $map['Detail'];
            }
        }
        if (isset($map['Elevation'])) {
            if (!empty($map['Elevation'])) {
                $model->elevation = $map['Elevation'];
            }
        }
        if (isset($map['Plan'])) {
            if (!empty($map['Plan'])) {
                $model->plan = $map['Plan'];
            }
        }
        if (isset($map['Sample'])) {
            if (!empty($map['Sample'])) {
                $model->sample = $map['Sample'];
            }
        }

        return $model;
    }
}
