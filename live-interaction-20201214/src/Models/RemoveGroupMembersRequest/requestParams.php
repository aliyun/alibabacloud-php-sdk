<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupMembersRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @var string
     */
    public $operatorAppUid;

    /**
     * @var string
     */
    public $appCid;

    /**
     * @var string[]
     */
    public $appUidsRemoved;
    protected $_name = [
        'operatorAppUid' => 'OperatorAppUid',
        'appCid'         => 'AppCid',
        'appUidsRemoved' => 'AppUidsRemoved',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operatorAppUid) {
            $res['OperatorAppUid'] = $this->operatorAppUid;
        }
        if (null !== $this->appCid) {
            $res['AppCid'] = $this->appCid;
        }
        if (null !== $this->appUidsRemoved) {
            $res['AppUidsRemoved'] = $this->appUidsRemoved;
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
        if (isset($map['OperatorAppUid'])) {
            $model->operatorAppUid = $map['OperatorAppUid'];
        }
        if (isset($map['AppCid'])) {
            $model->appCid = $map['AppCid'];
        }
        if (isset($map['AppUidsRemoved'])) {
            if (!empty($map['AppUidsRemoved'])) {
                $model->appUidsRemoved = $map['AppUidsRemoved'];
            }
        }

        return $model;
    }
}
