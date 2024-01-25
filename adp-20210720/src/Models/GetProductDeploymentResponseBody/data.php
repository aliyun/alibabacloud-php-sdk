<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\GetProductDeploymentResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example clusterId: db53384e-6ed2-4902-ad38-xxx
     * -----END PUBLIC KEY-----
     * @var string
     */
    public $envParams;

    /**
     * @example b8ec63af-7859-4464-9cff-xxx
     *
     * @var string
     */
    public $envUID;

    /**
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @example 5699b683-075a-4c51-a78c-xxx
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'envParams' => 'envParams',
        'envUID'    => 'envUID',
        'status'    => 'status',
        'uid'       => 'uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envParams) {
            $res['envParams'] = $this->envParams;
        }
        if (null !== $this->envUID) {
            $res['envUID'] = $this->envUID;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
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
        if (isset($map['envParams'])) {
            $model->envParams = $map['envParams'];
        }
        if (isset($map['envUID'])) {
            $model->envUID = $map['envUID'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
