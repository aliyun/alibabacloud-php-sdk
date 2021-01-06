<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectSpineMRIResponseBody\data;

use AlibabaCloud\Tea\Model;

class vertebras extends Model
{
    /**
     * @var string
     */
    public $identification;

    /**
     * @var string
     */
    public $disease;

    /**
     * @var float[]
     */
    public $location;
    protected $_name = [
        'identification' => 'Identification',
        'disease'        => 'Disease',
        'location'       => 'Location',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identification) {
            $res['Identification'] = $this->identification;
        }
        if (null !== $this->disease) {
            $res['Disease'] = $this->disease;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vertebras
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Identification'])) {
            $model->identification = $map['Identification'];
        }
        if (isset($map['Disease'])) {
            $model->disease = $map['Disease'];
        }
        if (isset($map['Location'])) {
            if (!empty($map['Location'])) {
                $model->location = $map['Location'];
            }
        }

        return $model;
    }
}
