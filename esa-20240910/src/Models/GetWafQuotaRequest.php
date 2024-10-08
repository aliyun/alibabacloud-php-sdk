<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetWafQuotaRequest extends Model
{
    /**
     * @example page
     *
     * @var string
     */
    public $paths;
    protected $_name = [
        'paths' => 'Paths',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paths) {
            $res['Paths'] = $this->paths;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWafQuotaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Paths'])) {
            $model->paths = $map['Paths'];
        }

        return $model;
    }
}
