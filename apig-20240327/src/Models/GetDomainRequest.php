<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class GetDomainRequest extends Model
{
    /**
     * @var bool
     */
    public $withStatistics;
    protected $_name = [
        'withStatistics' => 'withStatistics',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->withStatistics) {
            $res['withStatistics'] = $this->withStatistics;
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
        if (isset($map['withStatistics'])) {
            $model->withStatistics = $map['withStatistics'];
        }

        return $model;
    }
}
