<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Tea\Model;

class EditZeroCreditShutdownRequest extends Model
{
    /**
     * @description UID
     *
     * @example Shutdown Policy</br>
     *
     * - noStop, The instances of the specified End User\"s account will not be shutdown, after EU have triggered the Shutdown Policy.</br>
     * @var string
     */
    public $shutdownPolicy;

    /**
     * @description No Change History
     *
     * @example 1263644979775567
     *
     * @var int
     */
    public $uid;
    protected $_name = [
        'shutdownPolicy' => 'ShutdownPolicy',
        'uid'            => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->shutdownPolicy) {
            $res['ShutdownPolicy'] = $this->shutdownPolicy;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EditZeroCreditShutdownRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ShutdownPolicy'])) {
            $model->shutdownPolicy = $map['ShutdownPolicy'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
