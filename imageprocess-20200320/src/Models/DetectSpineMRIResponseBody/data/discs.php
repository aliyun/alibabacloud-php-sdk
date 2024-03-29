<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectSpineMRIResponseBody\data;

use AlibabaCloud\Tea\Model;

class discs extends Model
{
    /**
     * @example v1
     *
     * @var string
     */
    public $disease;

    /**
     * @example L5-S1
     *
     * @var string
     */
    public $identification;

    /**
     * @var float[]
     */
    public $location;
    protected $_name = [
        'disease'        => 'Disease',
        'identification' => 'Identification',
        'location'       => 'Location',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disease) {
            $res['Disease'] = $this->disease;
        }
        if (null !== $this->identification) {
            $res['Identification'] = $this->identification;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return discs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Disease'])) {
            $model->disease = $map['Disease'];
        }
        if (isset($map['Identification'])) {
            $model->identification = $map['Identification'];
        }
        if (isset($map['Location'])) {
            if (!empty($map['Location'])) {
                $model->location = $map['Location'];
            }
        }

        return $model;
    }
}
