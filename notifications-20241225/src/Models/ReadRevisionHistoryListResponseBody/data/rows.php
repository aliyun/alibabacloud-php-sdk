<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Notifications\V20241225\Models\ReadRevisionHistoryListResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadRevisionHistoryListResponseBody\data\rows\pageSpec;

class rows extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $categoryCode;

    /**
     * @var string
     */
    public $channelGroupCode;

    /**
     * @var string
     */
    public $newValue;

    /**
     * @var string
     */
    public $operationItemCode;

    /**
     * @var string
     */
    public $operationItemName;

    /**
     * @var int
     */
    public $operationTimestamp;

    /**
     * @var string
     */
    public $operatorIp;

    /**
     * @var string
     */
    public $operatorName;

    /**
     * @var int
     */
    public $operatorUid;

    /**
     * @var string
     */
    public $originalValue;

    /**
     * @var pageSpec
     */
    public $pageSpec;

    /**
     * @var string
     */
    public $remarks;
    protected $_name = [
        'aliUid' => 'AliUid',
        'categoryCode' => 'CategoryCode',
        'channelGroupCode' => 'ChannelGroupCode',
        'newValue' => 'NewValue',
        'operationItemCode' => 'OperationItemCode',
        'operationItemName' => 'OperationItemName',
        'operationTimestamp' => 'OperationTimestamp',
        'operatorIp' => 'OperatorIp',
        'operatorName' => 'OperatorName',
        'operatorUid' => 'OperatorUid',
        'originalValue' => 'OriginalValue',
        'pageSpec' => 'PageSpec',
        'remarks' => 'Remarks',
    ];

    public function validate()
    {
        if (null !== $this->pageSpec) {
            $this->pageSpec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->categoryCode) {
            $res['CategoryCode'] = $this->categoryCode;
        }

        if (null !== $this->channelGroupCode) {
            $res['ChannelGroupCode'] = $this->channelGroupCode;
        }

        if (null !== $this->newValue) {
            $res['NewValue'] = $this->newValue;
        }

        if (null !== $this->operationItemCode) {
            $res['OperationItemCode'] = $this->operationItemCode;
        }

        if (null !== $this->operationItemName) {
            $res['OperationItemName'] = $this->operationItemName;
        }

        if (null !== $this->operationTimestamp) {
            $res['OperationTimestamp'] = $this->operationTimestamp;
        }

        if (null !== $this->operatorIp) {
            $res['OperatorIp'] = $this->operatorIp;
        }

        if (null !== $this->operatorName) {
            $res['OperatorName'] = $this->operatorName;
        }

        if (null !== $this->operatorUid) {
            $res['OperatorUid'] = $this->operatorUid;
        }

        if (null !== $this->originalValue) {
            $res['OriginalValue'] = $this->originalValue;
        }

        if (null !== $this->pageSpec) {
            $res['PageSpec'] = null !== $this->pageSpec ? $this->pageSpec->toArray($noStream) : $this->pageSpec;
        }

        if (null !== $this->remarks) {
            $res['Remarks'] = $this->remarks;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['CategoryCode'])) {
            $model->categoryCode = $map['CategoryCode'];
        }

        if (isset($map['ChannelGroupCode'])) {
            $model->channelGroupCode = $map['ChannelGroupCode'];
        }

        if (isset($map['NewValue'])) {
            $model->newValue = $map['NewValue'];
        }

        if (isset($map['OperationItemCode'])) {
            $model->operationItemCode = $map['OperationItemCode'];
        }

        if (isset($map['OperationItemName'])) {
            $model->operationItemName = $map['OperationItemName'];
        }

        if (isset($map['OperationTimestamp'])) {
            $model->operationTimestamp = $map['OperationTimestamp'];
        }

        if (isset($map['OperatorIp'])) {
            $model->operatorIp = $map['OperatorIp'];
        }

        if (isset($map['OperatorName'])) {
            $model->operatorName = $map['OperatorName'];
        }

        if (isset($map['OperatorUid'])) {
            $model->operatorUid = $map['OperatorUid'];
        }

        if (isset($map['OriginalValue'])) {
            $model->originalValue = $map['OriginalValue'];
        }

        if (isset($map['PageSpec'])) {
            $model->pageSpec = pageSpec::fromMap($map['PageSpec']);
        }

        if (isset($map['Remarks'])) {
            $model->remarks = $map['Remarks'];
        }

        return $model;
    }
}
