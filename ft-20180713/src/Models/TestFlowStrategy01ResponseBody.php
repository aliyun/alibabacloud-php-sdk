<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

class TestFlowStrategy01ResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $names;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $list;
    protected $_name = [
        'names'     => 'Names',
        'requestId' => 'RequestId',
        'list'      => 'List',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->names) {
            $res['Names'] = $this->names;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->list) {
            $res['List'] = $this->list;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TestFlowStrategy01ResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Names'])) {
            if (!empty($map['Names'])) {
                $model->names = $map['Names'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = $map['List'];
            }
        }

        return $model;
    }
}
