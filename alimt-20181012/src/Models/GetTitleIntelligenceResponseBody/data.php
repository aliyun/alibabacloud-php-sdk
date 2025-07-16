<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models\GetTitleIntelligenceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example Custom Hello Kitty PVC Cartoon Apple for Home Garden Complete Apple Bath Shower
     *
     * @var string
     */
    public $titles;
    protected $_name = [
        'titles' => 'Titles',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->titles) {
            $res['Titles'] = $this->titles;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Titles'])) {
            $model->titles = $map['Titles'];
        }

        return $model;
    }
}
