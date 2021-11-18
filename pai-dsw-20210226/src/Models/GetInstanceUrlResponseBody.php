<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceUrlResponseBody extends Model
{
    /**
     * @description webide的链接
     *
     * @var string
     */
    public $ide;

    /**
     * @description jupyterlab的链接
     *
     * @var string
     */
    public $lab;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description terminal终端的链接
     *
     * @var string
     */
    public $terminal;
    protected $_name = [
        'ide'       => 'Ide',
        'lab'       => 'Lab',
        'requestId' => 'RequestId',
        'terminal'  => 'Terminal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ide) {
            $res['Ide'] = $this->ide;
        }
        if (null !== $this->lab) {
            $res['Lab'] = $this->lab;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->terminal) {
            $res['Terminal'] = $this->terminal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceUrlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ide'])) {
            $model->ide = $map['Ide'];
        }
        if (isset($map['Lab'])) {
            $model->lab = $map['Lab'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Terminal'])) {
            $model->terminal = $map['Terminal'];
        }

        return $model;
    }
}
