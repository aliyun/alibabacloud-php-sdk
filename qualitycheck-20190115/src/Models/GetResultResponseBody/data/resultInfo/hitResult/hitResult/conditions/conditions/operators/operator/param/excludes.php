<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators\operator\param;

use AlibabaCloud\Tea\Model;

class excludes extends Model
{
    /**
     * @var string[]
     */
    public $exclude;
    protected $_name = [
        'exclude' => 'Exclude',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exclude) {
            $res['Exclude'] = $this->exclude;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return excludes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Exclude'])) {
            if (!empty($map['Exclude'])) {
                $model->exclude = $map['Exclude'];
            }
        }

        return $model;
    }
}
