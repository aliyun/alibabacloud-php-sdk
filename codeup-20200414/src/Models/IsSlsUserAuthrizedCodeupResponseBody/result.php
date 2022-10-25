<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\IsSlsUserAuthrizedCodeupResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $authrized;
    protected $_name = [
        'authrized' => 'authrized',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authrized) {
            $res['authrized'] = $this->authrized;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['authrized'])) {
            $model->authrized = $map['authrized'];
        }

        return $model;
    }
}
