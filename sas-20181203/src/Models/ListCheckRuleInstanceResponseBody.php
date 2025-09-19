<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckRuleInstanceResponseBody\checkRuleInstances;

class ListCheckRuleInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $assetSubType;

    /**
     * @var string
     */
    public $assetType;

    /**
     * @var string
     */
    public $checkId;

    /**
     * @var checkRuleInstances[]
     */
    public $checkRuleInstances;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'aliUid' => 'AliUid',
        'assetSubType' => 'AssetSubType',
        'assetType' => 'AssetType',
        'checkId' => 'CheckId',
        'checkRuleInstances' => 'CheckRuleInstances',
        'requestId' => 'RequestId',
        'vendor' => 'Vendor',
    ];

    public function validate()
    {
        if (\is_array($this->checkRuleInstances)) {
            Model::validateArray($this->checkRuleInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->assetSubType) {
            $res['AssetSubType'] = $this->assetSubType;
        }

        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }

        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->checkRuleInstances) {
            if (\is_array($this->checkRuleInstances)) {
                $res['CheckRuleInstances'] = [];
                $n1 = 0;
                foreach ($this->checkRuleInstances as $item1) {
                    $res['CheckRuleInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
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

        if (isset($map['AssetSubType'])) {
            $model->assetSubType = $map['AssetSubType'];
        }

        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }

        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['CheckRuleInstances'])) {
            if (!empty($map['CheckRuleInstances'])) {
                $model->checkRuleInstances = [];
                $n1 = 0;
                foreach ($map['CheckRuleInstances'] as $item1) {
                    $model->checkRuleInstances[$n1] = checkRuleInstances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
