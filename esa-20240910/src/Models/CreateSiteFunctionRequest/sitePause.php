<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionRequest;

use AlibabaCloud\Tea\Model;

class sitePause extends Model
{
    /**
     * @description Specifies whether ESA is paused on the website. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var string
     */
    public $paused;
    protected $_name = [
        'paused' => 'Paused',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paused) {
            $res['Paused'] = $this->paused;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sitePause
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Paused'])) {
            $model->paused = $map['Paused'];
        }

        return $model;
    }
}
