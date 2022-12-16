<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class ImportNacosConfigRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     * - en: English
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The download URL of the configuration file.
     *
     * @example https://mcube-prod.oss-cn-hangzhou.aliyuncs.com/mds/tempFileForOnex/9D7A04F072140/default/SELWNJCN/ea56fa54-ee30-42a6-8611-8c2ecc48a460/00000023.zip
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @description The ID of the instance.
     *
     * @example mse_prepaid_public_cn-****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the namespace.
     *
     * @example f5cdc80a-****-8094-282f5650fc00
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The policy used to handle write conflicts.
     *
     * @example overwrite
     *
     * @var string
     */
    public $policy;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'fileUrl'        => 'FileUrl',
        'instanceId'     => 'InstanceId',
        'namespaceId'    => 'NamespaceId',
        'policy'         => 'Policy',
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
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportNacosConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        return $model;
    }
}
