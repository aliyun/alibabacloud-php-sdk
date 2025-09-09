<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SyncAppInstanceForPartnerRequest\appInstance;

use AlibabaCloud\Dara\Model;

class profile extends Model
{
    /**
     * @var string
     */
    public $deployArea;

    /**
     * @var string
     */
    public $lxInstanceId;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $siteVersion;

    /**
     * @var string
     */
    public $templateEtag;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'deployArea' => 'DeployArea',
        'lxInstanceId' => 'LxInstanceId',
        'orderId' => 'OrderId',
        'siteVersion' => 'SiteVersion',
        'templateEtag' => 'TemplateEtag',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deployArea) {
            $res['DeployArea'] = $this->deployArea;
        }

        if (null !== $this->lxInstanceId) {
            $res['LxInstanceId'] = $this->lxInstanceId;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->siteVersion) {
            $res['SiteVersion'] = $this->siteVersion;
        }

        if (null !== $this->templateEtag) {
            $res['TemplateEtag'] = $this->templateEtag;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['DeployArea'])) {
            $model->deployArea = $map['DeployArea'];
        }

        if (isset($map['LxInstanceId'])) {
            $model->lxInstanceId = $map['LxInstanceId'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }

        if (isset($map['TemplateEtag'])) {
            $model->templateEtag = $map['TemplateEtag'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
