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
     * >  If `AggregatorType` is set to `RD` or `FOLDER`, this parameter can be left empty, which indicates that all accounts in the resource directory are added to the global account group.
     * @var string
     */
    public $aggregatorAccountsShrink;

    /**
     * @description The name of the account group.
     *
     * This parameter is required.
     * @example Test_Group
     *
     * @var string
     */
    public $aggregatorName;

    /**
     * @description The type of the account group. Valid values:
     *
     *   RD: global account group.
     *   FOLDER: account group of the folder.
     *   CUSTOM (default): custom account group.
     *
     * @example CUSTOM
     *
     * @var string
     */
    public $aggregatorType;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The `token` can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 1594295238-f9361358-5843-4294-8d30-b5183fac****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the account group.
     *
     * This parameter is required.
     * @example Aggregator description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the folder to which the account group is attached. You must specify this parameter if `AggregatorType` is set to `FOLDER`.
     *
     * @example fd-brHdgv****
     *
     * @var string
     */
    public $folderId;
    protected $_name = [
        'aggregatorAccountsShrink' => 'AggregatorAccounts',
        'aggregatorName'           => 'AggregatorName',
        'aggregatorType'           => 'AggregatorType',
        'clientToken'              => 'ClientToken',
        'description'              => 'Description',
        'folderId'                 => 'FolderId',
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
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
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
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }

        return $model;
    }
}
