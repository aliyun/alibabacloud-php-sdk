<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\CreateApplicationResponseBody\application;

use AlibabaCloud\Tea\Model;

class cloudMonitorRule extends Model
{
    /**
     * @var bool
     */
    public $enableSubscribeEvent;

    /**
     * @var bool
     */
    public $enableInstallAgent;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string[]
     */
    public $contactGroupList;

    /**
     * @var int[]
     */
    public $templateIdList;
    protected $_name = [
        'enableSubscribeEvent' => 'EnableSubscribeEvent',
        'enableInstallAgent'   => 'EnableInstallAgent',
        'enabled'              => 'Enabled',
        'contactGroupList'     => 'ContactGroupList',
        'templateIdList'       => 'TemplateIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableSubscribeEvent) {
            $res['EnableSubscribeEvent'] = $this->enableSubscribeEvent;
        }
        if (null !== $this->enableInstallAgent) {
            $res['EnableInstallAgent'] = $this->enableInstallAgent;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->contactGroupList) {
            $res['ContactGroupList'] = $this->contactGroupList;
        }
        if (null !== $this->templateIdList) {
            $res['TemplateIdList'] = $this->templateIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cloudMonitorRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableSubscribeEvent'])) {
            $model->enableSubscribeEvent = $map['EnableSubscribeEvent'];
        }
        if (isset($map['EnableInstallAgent'])) {
            $model->enableInstallAgent = $map['EnableInstallAgent'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['ContactGroupList'])) {
            if (!empty($map['ContactGroupList'])) {
                $model->contactGroupList = $map['ContactGroupList'];
            }
        }
        if (isset($map['TemplateIdList'])) {
            if (!empty($map['TemplateIdList'])) {
                $model->templateIdList = $map['TemplateIdList'];
            }
        }

        return $model;
    }
}
