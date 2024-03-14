<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210519\Models;

use AlibabaCloud\Tea\Model;

class ImportAppAlertRulesRequest extends Model
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
    public $pids;

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
    public $templateAlertId;
    protected $_name = [
        'contactGroupIds'     => 'ContactGroupIds',
        'isAutoStart'         => 'IsAutoStart',
        'pids'                => 'Pids',
        'regionId'            => 'RegionId',
        'templageAlertConfig' => 'TemplageAlertConfig',
        'templateAlertId'     => 'TemplateAlertId',
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
        if (null !== $this->pids) {
            $res['Pids'] = $this->pids;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->templageAlertConfig) {
            $res['TemplageAlertConfig'] = $this->templageAlertConfig;
        }
        if (null !== $this->templateAlertId) {
            $res['TemplateAlertId'] = $this->templateAlertId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportAppAlertRulesRequest
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
        if (isset($map['Pids'])) {
            $model->pids = $map['Pids'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TemplageAlertConfig'])) {
            $model->templageAlertConfig = $map['TemplageAlertConfig'];
        }
        if (isset($map['TemplateAlertId'])) {
            $model->templateAlertId = $map['TemplateAlertId'];
        }

        return $model;
    }
}
