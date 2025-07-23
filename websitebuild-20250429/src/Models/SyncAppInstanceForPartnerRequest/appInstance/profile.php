<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SyncAppInstanceForPartnerRequest\appInstance;

use AlibabaCloud\Tea\Model;

class profile extends Model
{
    /**
     * @example ChineseMainland
     *
     * @var string
     */
    public $deployArea;

    /**
     * @example 12313213
     *
     * @var string
     */
    public $lxInstanceId;

    /**
     * @example 222217928591
     *
     * @var string
     */
    public $orderId;

    /**
     * @example Basic_Edition
     *
     * @var string
     */
    public $siteVersion;

    /**
     * @example DC4D30B7BADDAFE9928A6C36416A2A4C
     *
     * @var string
     */
    public $templateEtag;

    /**
     * @example ST20211231160247sYG4
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return profile
     */
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
