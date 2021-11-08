<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class PaasNodeDTO extends Model
{
    /**
     * @description Code
     *
     * @var string
     */
    public $code;

    /**
     * @description Id
     *
     * @var string
     */
    public $id;

    /**
     * @description Label
     *
     * @var string
     */
    public $label;

    /**
     * @description PluginData
     *
     * @var PaasPluginDataDTO
     */
    public $pluginData;

    /**
     * @description Xx
     *
     * @var float
     */
    public $xx;

    /**
     * @description Yy
     *
     * @var float
     */
    public $yy;
    protected $_name = [
        'code'       => 'Code',
        'id'         => 'Id',
        'label'      => 'Label',
        'pluginData' => 'PluginData',
        'xx'         => 'Xx',
        'yy'         => 'Yy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->pluginData) {
            $res['PluginData'] = null !== $this->pluginData ? $this->pluginData->toMap() : null;
        }
        if (null !== $this->xx) {
            $res['Xx'] = $this->xx;
        }
        if (null !== $this->yy) {
            $res['Yy'] = $this->yy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PaasNodeDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['PluginData'])) {
            $model->pluginData = PaasPluginDataDTO::fromMap($map['PluginData']);
        }
        if (isset($map['Xx'])) {
            $model->xx = $map['Xx'];
        }
        if (isset($map['Yy'])) {
            $model->yy = $map['Yy'];
        }

        return $model;
    }
}
