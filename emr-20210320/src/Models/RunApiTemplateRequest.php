<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class RunApiTemplateRequest extends Model
{
    /**
     * @description 接口名。
     *
     * @example CreateCluster
     *
     * @var string
     */
    public $apiName;

    /**
     * @description 幂等客户端TOKEN。
     *
     * @example A7D960FA-6DBA-5E07-8746-A63E3E4D****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 地域ID。
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 集群模板id。
     *
     * @example AT-****
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'apiName'     => 'ApiName',
        'clientToken' => 'ClientToken',
        'regionId'    => 'RegionId',
        'templateId'  => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunApiTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
