<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\UAIDVerificationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example B1E0C1********9F757AF52A035
     *
     * @var string
     */
    public $uaid;
    protected $_name = [
        'uaid' => 'Uaid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uaid) {
            $res['Uaid'] = $this->uaid;
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
        if (isset($map['Uaid'])) {
            $model->uaid = $map['Uaid'];
        }

        return $model;
    }
}
