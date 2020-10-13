<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models;

use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetControlRulesResponse\pager;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetControlRulesResponse\settingList;
use AlibabaCloud\Tea\Model;

class GetControlRulesResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $code;

    /**
     * @var settingList
     */
    public $settingList;

    /**
     * @var pager
     */
    public $pager;
    protected $_name = [
        'requestId'   => 'RequestId',
        'code'        => 'Code',
        'settingList' => 'SettingList',
        'pager'       => 'Pager',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('settingList', $this->settingList, true);
        Model::validateRequired('pager', $this->pager, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->settingList) {
            $res['SettingList'] = null !== $this->settingList ? $this->settingList->toMap() : null;
        }
        if (null !== $this->pager) {
            $res['Pager'] = null !== $this->pager ? $this->pager->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetControlRulesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['SettingList'])) {
            $model->settingList = settingList::fromMap($map['SettingList']);
        }
        if (isset($map['Pager'])) {
            $model->pager = pager::fromMap($map['Pager']);
        }

        return $model;
    }
}
