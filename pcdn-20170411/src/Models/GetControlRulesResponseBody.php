<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models;

use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetControlRulesResponseBody\pager;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetControlRulesResponseBody\settingList;
use AlibabaCloud\Tea\Model;

class GetControlRulesResponseBody extends Model
{
    /**
     * @var settingList
     */
    public $settingList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var pager
     */
    public $pager;

    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'settingList' => 'SettingList',
        'requestId'   => 'RequestId',
        'pager'       => 'Pager',
        'code'        => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->settingList) {
            $res['SettingList'] = null !== $this->settingList ? $this->settingList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pager) {
            $res['Pager'] = null !== $this->pager ? $this->pager->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetControlRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SettingList'])) {
            $model->settingList = settingList::fromMap($map['SettingList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Pager'])) {
            $model->pager = pager::fromMap($map['Pager']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
