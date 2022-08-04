<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGrayTenRequest\home\address;

use AlibabaCloud\Tea\Model;

class location extends Model
{
    /**
     * @var int
     */
    public $late;

    /**
     * @var int
     */
    public $lon;
    protected $_name = [
        'late' => 'Late',
        'lon'  => 'Lon',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->late) {
            $res['Late'] = $this->late;
        }
        if (null !== $this->lon) {
            $res['Lon'] = $this->lon;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return location
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Late'])) {
            $model->late = $map['Late'];
        }
        if (isset($map['Lon'])) {
            $model->lon = $map['Lon'];
        }

        return $model;
    }
}
