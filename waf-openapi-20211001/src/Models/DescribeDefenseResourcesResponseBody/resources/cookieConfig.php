<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourcesResponseBody\resources;

use AlibabaCloud\Dara\Model;

class cookieConfig extends Model
{
    /**
     * @var string
     */
    public $acwScV3SameSite;

    /**
     * @var string
     */
    public $acwTcSameSite;
    protected $_name = [
        'acwScV3SameSite' => 'AcwScV3SameSite',
        'acwTcSameSite' => 'AcwTcSameSite',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acwScV3SameSite) {
            $res['AcwScV3SameSite'] = $this->acwScV3SameSite;
        }

        if (null !== $this->acwTcSameSite) {
            $res['AcwTcSameSite'] = $this->acwTcSameSite;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcwScV3SameSite'])) {
            $model->acwScV3SameSite = $map['AcwScV3SameSite'];
        }

        if (isset($map['AcwTcSameSite'])) {
            $model->acwTcSameSite = $map['AcwTcSameSite'];
        }

        return $model;
    }
}
