<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiDocResponseBody\sdkDemos;

use AlibabaCloud\Tea\Model;

class sdkDemo extends Model
{
    /**
     * @var string
     */
    public $callDemo;

    /**
     * @var string
     */
    public $ideKey;
    protected $_name = [
        'callDemo' => 'CallDemo',
        'ideKey'   => 'IdeKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callDemo) {
            $res['CallDemo'] = $this->callDemo;
        }
        if (null !== $this->ideKey) {
            $res['IdeKey'] = $this->ideKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sdkDemo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallDemo'])) {
            $model->callDemo = $map['CallDemo'];
        }
        if (isset($map['IdeKey'])) {
            $model->ideKey = $map['IdeKey'];
        }

        return $model;
    }
}
