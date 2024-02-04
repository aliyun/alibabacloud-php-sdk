<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSampleSqlRawTextsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $sqlText;
    protected $_name = [
        'sqlText' => 'SqlText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sqlText) {
            $res['SqlText'] = $this->sqlText;
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
        if (isset($map['SqlText'])) {
            if (!empty($map['SqlText'])) {
                $model->sqlText = $map['SqlText'];
            }
        }

        return $model;
    }
}
