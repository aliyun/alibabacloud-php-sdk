<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UnbindK8sSlbRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $slbName;
    protected $_name = [
        'appId'     => 'AppId',
        'clusterId' => 'ClusterId',
        'type'      => 'Type',
        'slbName'   => 'SlbName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->slbName) {
            $res['SlbName'] = $this->slbName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnbindK8sSlbRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['SlbName'])) {
            $model->slbName = $map['SlbName'];
        }

        return $model;
    }
}
