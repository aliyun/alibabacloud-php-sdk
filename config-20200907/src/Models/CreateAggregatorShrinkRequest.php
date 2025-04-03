<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;

class CreateAggregatorShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $aggregatorAccountsShrink;

    /**
     * @var string
     */
    public $aggregatorName;

    /**
     * @var string
     */
    public $aggregatorType;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $folderId;

    /**
     * @var string
     */
    public $tagShrink;
    protected $_name = [
        'aggregatorAccountsShrink' => 'AggregatorAccounts',
        'aggregatorName' => 'AggregatorName',
        'aggregatorType' => 'AggregatorType',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'folderId' => 'FolderId',
        'tagShrink' => 'Tag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->tagShrink) {
            $res['Tag'] = $this->tagShrink;
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

        if (isset($map['Tag'])) {
            $model->tagShrink = $map['Tag'];
        }

        return $model;
    }
}
