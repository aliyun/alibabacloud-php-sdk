<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateCloudGtmMonitorTemplateRemarkRequest extends Model
{
    /**
     * @example en-US
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @example 1ae05db4-10e7-11ef-b126-00163e24**22
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @description This parameter is required.
     *
     * @example mtp-89518052455928**00
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'clientToken'    => 'ClientToken',
        'remark'         => 'Remark',
        'templateId'     => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCloudGtmMonitorTemplateRemarkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
