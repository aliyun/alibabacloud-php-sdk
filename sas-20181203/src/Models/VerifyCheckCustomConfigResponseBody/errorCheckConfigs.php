<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\VerifyCheckCustomConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\VerifyCheckCustomConfigResponseBody\errorCheckConfigs\linkErrorConfigs;

class errorCheckConfigs extends Model
{
    /**
     * @var string
     */
    public $errorCode;
    /**
     * @var string
     */
    public $errorMsg;
    /**
     * @var linkErrorConfigs[]
     */
    public $linkErrorConfigs;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'errorCode'        => 'ErrorCode',
        'errorMsg'         => 'ErrorMsg',
        'linkErrorConfigs' => 'LinkErrorConfigs',
        'name'             => 'Name',
        'type'             => 'Type',
        'value'            => 'Value',
    ];

    public function validate()
    {
        if (\is_array($this->linkErrorConfigs)) {
            Model::validateArray($this->linkErrorConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }

        if (null !== $this->linkErrorConfigs) {
            if (\is_array($this->linkErrorConfigs)) {
                $res['LinkErrorConfigs'] = [];
                $n1                      = 0;
                foreach ($this->linkErrorConfigs as $item1) {
                    $res['LinkErrorConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }

        if (isset($map['LinkErrorConfigs'])) {
            if (!empty($map['LinkErrorConfigs'])) {
                $model->linkErrorConfigs = [];
                $n1                      = 0;
                foreach ($map['LinkErrorConfigs'] as $item1) {
                    $model->linkErrorConfigs[$n1++] = linkErrorConfigs::fromMap($item1);
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
