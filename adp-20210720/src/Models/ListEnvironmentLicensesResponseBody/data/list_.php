<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\ListEnvironmentLicensesResponseBody\data;

use AlibabaCloud\SDK\Adp\V20210720\Models\ListEnvironmentLicensesResponseBody\data\list_\licenseQuota;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 2122-05-10T19:42:15+08:00
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example sKSQqgNrIhSL46z44zmNdCTfswaz5qM4inMHUMuCOtnIif4sNaor5U57iuDgrQLDNowllLht1gscn9/5jvhLbaPX5/BsdIqcTG2CVsQdu1g9Jhntw70h3upoWJFzEEo/+hOLRjjGPxWAiDwCflscDlL6JhMJq4tI7Uh/tPx8X7xtIyvH09DJdONfh54hznJrofmLyvrmkqt8VaM5ZPXsLDhetoYcXVCjc4fgSF3t3m+LCFevZKiIjwYc0TMirHZACjU2L0o3ovPzT5crpRafHV3B5GhBPuTlEZ7azdRs2tOKPj/56mPA1mv9easgheGcibeblo+Fnwf/S5CcADfzAwkKCO/57joJu6Wwwnw+VtRcbi2+Eiw7/wohBze8nS6G9J/arjJdmiOyQQ1FTY47mB71x05aFg+ZiLosfZigHG0XgTFx1Is63l6cpfECdCkRh5CwdtOi4Eceto3svcJO1dddBAtcPsYCbtqw8Los38KILlXSVVEgHAhBqHxudAHnZ27CX/z5tizLg6+jNEVpyRJCA1Vm+zAzVJ62xxxxxxxx=
     *
     * @var string
     */
    public $licenseKey;

    /**
     * @var licenseQuota
     */
    public $licenseQuota;

    /**
     * @example e61f944c-c021-46bd-a877-xxxxxxxxxxxx
     *
     * @var string
     */
    public $productVersionUID;

    /**
     * @var string
     */
    public $rejectReason;

    /**
     * @example foundation
     *
     * @var string
     */
    public $scope;

    /**
     * @example approved
     *
     * @var string
     */
    public $status;

    /**
     * @example OnTrial
     *
     * @var string
     */
    public $type;

    /**
     * @example 3c35c6fa-c080-444b-89ac-xxxxxxxxxxxx
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'expireTime'        => 'expireTime',
        'licenseKey'        => 'licenseKey',
        'licenseQuota'      => 'licenseQuota',
        'productVersionUID' => 'productVersionUID',
        'rejectReason'      => 'rejectReason',
        'scope'             => 'scope',
        'status'            => 'status',
        'type'              => 'type',
        'uid'               => 'uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireTime) {
            $res['expireTime'] = $this->expireTime;
        }
        if (null !== $this->licenseKey) {
            $res['licenseKey'] = $this->licenseKey;
        }
        if (null !== $this->licenseQuota) {
            $res['licenseQuota'] = null !== $this->licenseQuota ? $this->licenseQuota->toMap() : null;
        }
        if (null !== $this->productVersionUID) {
            $res['productVersionUID'] = $this->productVersionUID;
        }
        if (null !== $this->rejectReason) {
            $res['rejectReason'] = $this->rejectReason;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['expireTime'])) {
            $model->expireTime = $map['expireTime'];
        }
        if (isset($map['licenseKey'])) {
            $model->licenseKey = $map['licenseKey'];
        }
        if (isset($map['licenseQuota'])) {
            $model->licenseQuota = licenseQuota::fromMap($map['licenseQuota']);
        }
        if (isset($map['productVersionUID'])) {
            $model->productVersionUID = $map['productVersionUID'];
        }
        if (isset($map['rejectReason'])) {
            $model->rejectReason = $map['rejectReason'];
        }
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
