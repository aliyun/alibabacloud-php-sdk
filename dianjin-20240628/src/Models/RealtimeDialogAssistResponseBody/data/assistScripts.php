<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RealtimeDialogAssistResponseBody\data;

use AlibabaCloud\Dara\Model;

class assistScripts extends Model
{
    /**
     * @var string
     */
    public $assistScript;

    /**
     * @var string
     */
    public $intentCode;

    /**
     * @var string
     */
    public $intentLabels;

    /**
     * @var string
     */
    public $intentName;

    /**
     * @var bool
     */
    public $isDefault;
    protected $_name = [
        'assistScript' => 'assistScript',
        'intentCode' => 'intentCode',
        'intentLabels' => 'intentLabels',
        'intentName' => 'intentName',
        'isDefault' => 'isDefault',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assistScript) {
            $res['assistScript'] = $this->assistScript;
        }

        if (null !== $this->intentCode) {
            $res['intentCode'] = $this->intentCode;
        }

        if (null !== $this->intentLabels) {
            $res['intentLabels'] = $this->intentLabels;
        }

        if (null !== $this->intentName) {
            $res['intentName'] = $this->intentName;
        }

        if (null !== $this->isDefault) {
            $res['isDefault'] = $this->isDefault;
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
        if (isset($map['assistScript'])) {
            $model->assistScript = $map['assistScript'];
        }

        if (isset($map['intentCode'])) {
            $model->intentCode = $map['intentCode'];
        }

        if (isset($map['intentLabels'])) {
            $model->intentLabels = $map['intentLabels'];
        }

        if (isset($map['intentName'])) {
            $model->intentName = $map['intentName'];
        }

        if (isset($map['isDefault'])) {
            $model->isDefault = $map['isDefault'];
        }

        return $model;
    }
}
