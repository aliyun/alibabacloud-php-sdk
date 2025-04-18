<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\VerifyCheckCustomConfigResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\VerifyCheckCustomConfigResponseBody\errorRepairConfigs\linkErrorConfigs;
use AlibabaCloud\Tea\Model;

class errorRepairConfigs extends Model
{
    /**
     * @description Error code.
     *
     * @example ConfigEqualIllegal
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description Error message.
     *
     * @example Repair parameter is not equal to corresponding check parameter
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description Related configurations causing this error.
     *
     * @var linkErrorConfigs[]
     */
    public $linkErrorConfigs;

    /**
     * @description Name of the check item\\"s repair configuration, unique within the same check item.
     *
     * @example IpLists
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the parameter that caused the error:
     * - repair: Repair parameter
     *
     * @example repair
     *
     * @var string
     */
    public $type;

    /**
     * @description Name of the check item\\"s repair parameter, unique within the same check item.
     *
     * @example 172.26.49.XX
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'errorMsg' => 'ErrorMsg',
        'linkErrorConfigs' => 'LinkErrorConfigs',
        'name' => 'Name',
        'type' => 'Type',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->linkErrorConfigs) {
            $res['LinkErrorConfigs'] = [];
            if (null !== $this->linkErrorConfigs && \is_array($this->linkErrorConfigs)) {
                $n = 0;
                foreach ($this->linkErrorConfigs as $item) {
                    $res['LinkErrorConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return errorRepairConfigs
     */
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
                $n = 0;
                foreach ($map['LinkErrorConfigs'] as $item) {
                    $model->linkErrorConfigs[$n++] = null !== $item ? linkErrorConfigs::fromMap($item) : $item;
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
