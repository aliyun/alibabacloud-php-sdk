<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class GetWafQuotaRequest extends Model
{
    /**
     * @var string
     */
    public $paths;
    protected $_name = [
        'paths' => 'Paths',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->paths) {
            $res['Paths'] = $this->paths;
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
        if (isset($map['Paths'])) {
            $model->paths = $map['Paths'];
        }

        return $model;
    }
}
