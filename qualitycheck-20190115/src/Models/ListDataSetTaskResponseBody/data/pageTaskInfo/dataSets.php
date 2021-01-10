<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListDataSetTaskResponseBody\data\pageTaskInfo;

use AlibabaCloud\Tea\Model;

class dataSets extends Model
{
    /**
     * @var string[]
     */
    public $dataSets;
    protected $_name = [
        'dataSets' => 'dataSets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSets) {
            $res['dataSets'] = $this->dataSets;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataSets'])) {
            if (!empty($map['dataSets'])) {
                $model->dataSets = $map['dataSets'];
            }
        }

        return $model;
    }
}
