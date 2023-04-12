<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class CreateAggregatorShrinkRequest extends Model
{
    /**
     * @description The information about the member accounts in the account group. Example:
     *
     * [{
     * "accountId": 171322098523****,
     * }, {
     * "accountId": 100532098349****,
     * >  If the `AggregatorType` parameter is set to `RD`, this parameter can be left empty because all accounts in the resource directory are automatically added to the global account group.
     * @var string
     */
    public $aggregatorAccountsShrink;

    /**
     * @description The name of the account group.
     *
     * @example Test_Group
     *
     * @var string
     */
    public $aggregatorName;

    /**
     * @description The type of the account group. Valid values:
     *
     *   RD: global account group.
     *   CUSTOM: custom account group. This is the default value.
     *
     * @example CUSTOM
     *
     * @var string
     */
    public $aggregatorType;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that it is unique among different requests. The `ClientToken` value can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 1594295238-f9361358-5843-4294-8d30-b5183fac****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the account group.
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'aggregatorAccountsShrink' => 'AggregatorAccounts',
        'aggregatorName'           => 'AggregatorName',
        'aggregatorType'           => 'AggregatorType',
        'clientToken'              => 'ClientToken',
        'description'              => 'Description',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregatorAccountsShrink) {
            $res['AggregatorAccounts'] = $this->aggregatorAccountsShrink;
        }
        if (null !== $this->aggregatorName) {
            $res['AggregatorName'] = $this->aggregatorName;
        }
        if (null !== $this->aggregatorType) {
            $res['AggregatorType'] = $this->aggregatorType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAggregatorShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorAccounts'])) {
            $model->aggregatorAccountsShrink = $map['AggregatorAccounts'];
        }
        if (isset($map['AggregatorName'])) {
            $model->aggregatorName = $map['AggregatorName'];
        }
        if (isset($map['AggregatorType'])) {
            $model->aggregatorType = $map['AggregatorType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
