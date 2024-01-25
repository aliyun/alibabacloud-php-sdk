<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\GetEnvironmentLicenseResponseBody;

use AlibabaCloud\SDK\Adp\V20210720\Models\GetEnvironmentLicenseResponseBody\data\licenseQuota;
use AlibabaCloud\Tea\Model;

class data extends Model
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
     * @description kubernetes secret yaml。
     *
     * @example apiVersion: v1\ndata:\n  license: xxxxxXFnTnJJaFNMNDZ6NDR6bU5kQ1Rmc3dhejVxTTRpbk1IVU11Q090bklpZjRzTmFvcjVVNTdpdURnclFMRE5vd2xsTGh0MWdzY245LzVqdmhMYmFQWDUvQnNkSXFjVEcyQ1ZzUWR1MWc5SmhudHc3MGgzdXBvV0pGekVFby8raE9MUmpqR1B4V0FpRHdDZmxzY0RsTDZKaE1KcTR0STdVaC90UHg4WDd4dEl5dkgwOURKZE9OZmg1NGh6bkpyb2ZtTHl2cm1rcXQ4VmFNNVpQWHNMRGhldG9ZY1hWQ2pjNGZnU0YzdDNtK0xDRmV2WktpSWp3WWMwVE1pckhaQUNqVTJMMG8zb3ZQelQ1Y3JwUmFmSFYzQjVHaEJQdVRsRVo3YXpkUnMydE9LUGovNTZtUEExbXY5ZWFzZ2hlR2NpYmVibG8rRm53Zi9TNUNjQURmekF3a0tDTy81N2pvSnU2V3d3bncrVnRSY2JpMitFaXc3L3dvaEJ6ZThuUzZHOUovYXJqSmRtaU95UVExRlRZNDdtQjcxeDA1YUZnK1ppTG9zZlppZ0hHMFhnVEZ4MUlzNjNsNmNwZkVDZENrUmg1Q3dkdE9pNEVjZXRvM3N2Y0pPMWRkZEJBdGNQc1lDYnRxdzhMb3MzOEtJTGxYU1ZWRWdIQWhCcUh4dWRBSG5aMjdDWC96NXRpekxnNitqTkVWcHlSSkNBMVZtK3pBelZKNjJHc3ZJcTVzPQ==\nkind: Secret\nmetadata:\n  creationTimestamp: null\n  labels:\n    adp.aliyuncs.com/application-name: adp\n    adp.aliyuncs.com/license: \"true\"\n  name: license-adp\ntype: Opaque\n
     *
     * @var string
     */
    public $secretYAML;

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
        'secretYAML'        => 'secretYAML',
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
        if (null !== $this->secretYAML) {
            $res['secretYAML'] = $this->secretYAML;
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
     * @return data
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
        if (isset($map['secretYAML'])) {
            $model->secretYAML = $map['secretYAML'];
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
