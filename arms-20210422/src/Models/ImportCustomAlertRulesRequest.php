<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models;

use AlibabaCloud\Tea\Model;

class ImportCustomAlertRulesRequest extends Model
{
    /**
     * @var string
     */
    public $contactGroupIds;

    /**
     * @var bool
     */
    public $isAutoStart;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $templageAlertConfig;

    /**
     * @var string
     */
    public $templateAlertConfig;
    protected $_name = [
        'contactGroupIds'     => 'ContactGroupIds',
        'isAutoStart'         => 'IsAutoStart',
        'regionId'            => 'RegionId',
        'templageAlertConfig' => 'TemplageAlertConfig',
        'templateAlertConfig' => 'TemplateAlertConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroupIds) {
            $res['ContactGroupIds'] = $this->contactGroupIds;
        }
        if (null !== $this->isAutoStart) {
            $res['IsAutoStart'] = $this->isAutoStart;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->templageAlertConfig) {
            $res['TemplageAlertConfig'] = $this->templageAlertConfig;
        }
        if (null !== $this->templateAlertConfig) {
            $res['TemplateAlertConfig'] = $this->templateAlertConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportCustomAlertRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroupIds'])) {
            $model->contactGroupIds = $map['ContactGroupIds'];
        }
        if (isset($map['IsAutoStart'])) {
            $model->isAutoStart = $map['IsAutoStart'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TemplageAlertConfig'])) {
            $model->templageAlertConfig = $map['TemplageAlertConfig'];
        }
        if (isset($map['TemplateAlertConfig'])) {
            $model->templateAlertConfig = $map['TemplateAlertConfig'];
        }

        return $model;
    }
}
