<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class Checkout extends Model
{
    /**
     * @example +001691d0768ca49e9550beeb59fbc163f33b7e88:refs/remotes/origin/master
     *
     * @var string
     */
    public $ref;

    /**
     * @example https:/your_token/@github.com/buptwzj/test-initRepo4.git
     *
     * @var string
     */
    public $remote;
    protected $_name = [
        'ref'    => 'ref',
        'remote' => 'remote',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ref) {
            $res['ref'] = $this->ref;
        }
        if (null !== $this->remote) {
            $res['remote'] = $this->remote;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Checkout
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ref'])) {
            $model->ref = $map['ref'];
        }
        if (isset($map['remote'])) {
            $model->remote = $map['remote'];
        }

        return $model;
    }
}
