<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeWafScopeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account in SIEM.
     *
     * @example 127608589417****
     *
     * @var int
     */
    public $aliuid;

    /**
     * @description The domain names that are protected by the WAF instance.
     *
     * @example [123.com, 456.com]
     *
     * @var string[]
     */
    public $domains;

    /**
     * @description The ID of the WAF instance.
     *
     * @example waf-cn-tl123ast****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'aliuid'     => 'Aliuid',
        'domains'    => 'Domains',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliuid) {
            $res['Aliuid'] = $this->aliuid;
        }
        if (null !== $this->domains) {
            $res['Domains'] = $this->domains;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['Aliuid'])) {
            $model->aliuid = $map['Aliuid'];
        }
        if (isset($map['Domains'])) {
            if (!empty($map['Domains'])) {
                $model->domains = $map['Domains'];
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
