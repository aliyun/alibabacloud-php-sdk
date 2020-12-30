<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ledgerdb\V20191122\Models;

use AlibabaCloud\Tea\Model;

class ModifyIpWhiteListRequest extends Model
{
    /**
     * @var string
     */
    public $ledgerId;

    /**
     * @var string
     */
    public $modifyType;

    /**
     * @var string
     */
    public $ipList;
    protected $_name = [
        'ledgerId'   => 'LedgerId',
        'modifyType' => 'ModifyType',
        'ipList'     => 'IpList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ledgerId) {
            $res['LedgerId'] = $this->ledgerId;
        }
        if (null !== $this->modifyType) {
            $res['ModifyType'] = $this->modifyType;
        }
        if (null !== $this->ipList) {
            $res['IpList'] = $this->ipList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyIpWhiteListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LedgerId'])) {
            $model->ledgerId = $map['LedgerId'];
        }
        if (isset($map['ModifyType'])) {
            $model->modifyType = $map['ModifyType'];
        }
        if (isset($map['IpList'])) {
            $model->ipList = $map['IpList'];
        }

        return $model;
    }
}
