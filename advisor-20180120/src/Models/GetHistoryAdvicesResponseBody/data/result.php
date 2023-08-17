<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models\GetHistoryAdvicesResponseBody\data;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example EcsHighCpuUtilization
     *
     * @var string
     */
    public $checkId;

    /**
     * @var string
     */
    public $checkName;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 2023-07-01 00:00:00
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @example ecs
     *
     * @var string
     */
    public $product;

    /**
     * @example i-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $severity;

    /**
     * @example https://ecs.console.aliyun.com/#/server/i-bp67acfmxazb4p****\/detail?regionId=cn-hangzhou
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'checkId'     => 'CheckId',
        'checkName'   => 'CheckName',
        'description' => 'Description',
        'gmtCreated'  => 'GmtCreated',
        'product'     => 'Product',
        'resourceId'  => 'ResourceId',
        'severity'    => 'Severity',
        'url'         => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->checkName) {
            $res['CheckName'] = $this->checkName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['CheckName'])) {
            $model->checkName = $map['CheckName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
