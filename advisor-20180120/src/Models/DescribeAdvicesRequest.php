<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models;

use AlibabaCloud\Tea\Model;

class DescribeAdvicesRequest extends Model
{
    /**
     * @example 12345678
     *
     * @var int
     */
    public $adviceId;

    /**
     * @example EcsHighCpuUtilization
     *
     * @var string
     */
    public $checkId;

    /**
     * @example -
     *
     * @var int
     */
    public $clientUid;

    /**
     * @example 12345678
     *
     * @var int
     */
    public $excludeAdviceId;

    /**
     * @example -
     *
     * @var string
     */
    public $filterType;

    /**
     * @example -
     *
     * @var string
     */
    public $filterValue;

    /**
     * @example zh
     *
     * @var string
     */
    public $language;

    /**
     * @example ecs
     *
     * @var string
     */
    public $product;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @example i-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example -
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'adviceId'        => 'AdviceId',
        'checkId'         => 'CheckId',
        'clientUid'       => 'ClientUid',
        'excludeAdviceId' => 'ExcludeAdviceId',
        'filterType'      => 'FilterType',
        'filterValue'     => 'FilterValue',
        'language'        => 'Language',
        'product'         => 'Product',
        'region'          => 'Region',
        'resourceId'      => 'ResourceId',
        'token'           => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adviceId) {
            $res['AdviceId'] = $this->adviceId;
        }
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->clientUid) {
            $res['ClientUid'] = $this->clientUid;
        }
        if (null !== $this->excludeAdviceId) {
            $res['ExcludeAdviceId'] = $this->excludeAdviceId;
        }
        if (null !== $this->filterType) {
            $res['FilterType'] = $this->filterType;
        }
        if (null !== $this->filterValue) {
            $res['FilterValue'] = $this->filterValue;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAdvicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdviceId'])) {
            $model->adviceId = $map['AdviceId'];
        }
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['ClientUid'])) {
            $model->clientUid = $map['ClientUid'];
        }
        if (isset($map['ExcludeAdviceId'])) {
            $model->excludeAdviceId = $map['ExcludeAdviceId'];
        }
        if (isset($map['FilterType'])) {
            $model->filterType = $map['FilterType'];
        }
        if (isset($map['FilterValue'])) {
            $model->filterValue = $map['FilterValue'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
