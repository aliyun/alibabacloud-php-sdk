<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextRequest;

use AlibabaCloud\Tea\Model;

class internationalIdCardConfig extends Model
{
    /**
     * @var string
     */
    public $country;
    protected $_name = [
        'country' => 'Country',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return internationalIdCardConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }

        return $model;
    }
}
