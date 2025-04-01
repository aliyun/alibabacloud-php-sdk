<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class BindSlbRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $internet;

    /**
     * @var string
     */
    public $internetSlbChargeType;

    /**
     * @var string
     */
    public $internetSlbId;

    /**
     * @var string
     */
    public $intranet;

    /**
     * @var string
     */
    public $intranetSlbChargeType;

    /**
     * @var string
     */
    public $intranetSlbId;
    protected $_name = [
        'appId' => 'AppId',
        'internet' => 'Internet',
        'internetSlbChargeType' => 'InternetSlbChargeType',
        'internetSlbId' => 'InternetSlbId',
        'intranet' => 'Intranet',
        'intranetSlbChargeType' => 'IntranetSlbChargeType',
        'intranetSlbId' => 'IntranetSlbId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->internet) {
            $res['Internet'] = $this->internet;
        }

        if (null !== $this->internetSlbChargeType) {
            $res['InternetSlbChargeType'] = $this->internetSlbChargeType;
        }

        if (null !== $this->internetSlbId) {
            $res['InternetSlbId'] = $this->internetSlbId;
        }

        if (null !== $this->intranet) {
            $res['Intranet'] = $this->intranet;
        }

        if (null !== $this->intranetSlbChargeType) {
            $res['IntranetSlbChargeType'] = $this->intranetSlbChargeType;
        }

        if (null !== $this->intranetSlbId) {
            $res['IntranetSlbId'] = $this->intranetSlbId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['Internet'])) {
            $model->internet = $map['Internet'];
        }

        if (isset($map['InternetSlbChargeType'])) {
            $model->internetSlbChargeType = $map['InternetSlbChargeType'];
        }

        if (isset($map['InternetSlbId'])) {
            $model->internetSlbId = $map['InternetSlbId'];
        }

        if (isset($map['Intranet'])) {
            $model->intranet = $map['Intranet'];
        }

        if (isset($map['IntranetSlbChargeType'])) {
            $model->intranetSlbChargeType = $map['IntranetSlbChargeType'];
        }

        if (isset($map['IntranetSlbId'])) {
            $model->intranetSlbId = $map['IntranetSlbId'];
        }

        return $model;
    }
}
