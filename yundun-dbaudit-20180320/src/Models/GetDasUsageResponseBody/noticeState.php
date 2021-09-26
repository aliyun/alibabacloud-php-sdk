<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetDasUsageResponseBody;

use AlibabaCloud\Tea\Model;

class noticeState extends Model
{
    /**
     * @var bool
     */
    public $riskNotice;

    /**
     * @var bool
     */
    public $sysNotice;
    protected $_name = [
        'riskNotice' => 'RiskNotice',
        'sysNotice'  => 'SysNotice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->riskNotice) {
            $res['RiskNotice'] = $this->riskNotice;
        }
        if (null !== $this->sysNotice) {
            $res['SysNotice'] = $this->sysNotice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return noticeState
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RiskNotice'])) {
            $model->riskNotice = $map['RiskNotice'];
        }
        if (isset($map['SysNotice'])) {
            $model->sysNotice = $map['SysNotice'];
        }

        return $model;
    }
}
