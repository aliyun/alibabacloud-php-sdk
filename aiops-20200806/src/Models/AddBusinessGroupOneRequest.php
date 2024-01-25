<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class AddBusinessGroupOneRequest extends Model
{
    /**
     * @var string
     */
    public $businessGroupDesc;

    /**
     * @var string
     */
    public $businessGroupName;

    /**
     * @var string
     */
    public $operaUid;
    protected $_name = [
        'businessGroupDesc' => 'BusinessGroupDesc',
        'businessGroupName' => 'BusinessGroupName',
        'operaUid'          => 'OperaUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessGroupDesc) {
            $res['BusinessGroupDesc'] = $this->businessGroupDesc;
        }
        if (null !== $this->businessGroupName) {
            $res['BusinessGroupName'] = $this->businessGroupName;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddBusinessGroupOneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessGroupDesc'])) {
            $model->businessGroupDesc = $map['BusinessGroupDesc'];
        }
        if (isset($map['BusinessGroupName'])) {
            $model->businessGroupName = $map['BusinessGroupName'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }

        return $model;
    }
}
