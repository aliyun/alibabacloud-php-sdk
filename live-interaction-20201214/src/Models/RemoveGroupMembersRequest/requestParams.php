<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupMembersRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @example $2$111000
     *
     * @var string
     */
    public $appCid;

    /**
     * @var string[]
     */
    public $appUidsRemoved;

    /**
     * @example 888666
     *
     * @var string
     */
    public $operatorAppUid;
    protected $_name = [
        'appCid'         => 'AppCid',
        'appUidsRemoved' => 'AppUidsRemoved',
        'operatorAppUid' => 'OperatorAppUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCid) {
            $res['AppCid'] = $this->appCid;
        }
        if (null !== $this->appUidsRemoved) {
            $res['AppUidsRemoved'] = $this->appUidsRemoved;
        }
        if (null !== $this->operatorAppUid) {
            $res['OperatorAppUid'] = $this->operatorAppUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCid'])) {
            $model->appCid = $map['AppCid'];
        }
        if (isset($map['AppUidsRemoved'])) {
            if (!empty($map['AppUidsRemoved'])) {
                $model->appUidsRemoved = $map['AppUidsRemoved'];
            }
        }
        if (isset($map['OperatorAppUid'])) {
            $model->operatorAppUid = $map['OperatorAppUid'];
        }

        return $model;
    }
}
