<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class ListFormRemarksRequest extends Model
{
    /**
     * @var string
     */
    public $appType;
    /**
     * @var string[]
     */
    public $formInstanceIdList;
    /**
     * @var string
     */
    public $formUuid;
    /**
     * @var string
     */
    public $systemToken;
    protected $_name = [
        'appType'            => 'AppType',
        'formInstanceIdList' => 'FormInstanceIdList',
        'formUuid'           => 'FormUuid',
        'systemToken'        => 'SystemToken',
    ];

    public function validate()
    {
        if (\is_array($this->formInstanceIdList)) {
            Model::validateArray($this->formInstanceIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->formInstanceIdList) {
            if (\is_array($this->formInstanceIdList)) {
                $res['FormInstanceIdList'] = [];
                $n1                        = 0;
                foreach ($this->formInstanceIdList as $item1) {
                    $res['FormInstanceIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->formUuid) {
            $res['FormUuid'] = $this->formUuid;
        }

        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['FormInstanceIdList'])) {
            if (!empty($map['FormInstanceIdList'])) {
                $model->formInstanceIdList = [];
                $n1                        = 0;
                foreach ($map['FormInstanceIdList'] as $item1) {
                    $model->formInstanceIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['FormUuid'])) {
            $model->formUuid = $map['FormUuid'];
        }

        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }

        return $model;
    }
}
