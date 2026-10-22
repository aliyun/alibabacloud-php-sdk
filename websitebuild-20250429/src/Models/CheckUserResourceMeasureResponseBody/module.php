<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CheckUserResourceMeasureResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var int
     */
    public $desiredTotal;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var bool
     */
    public $passed;

    /**
     * @var string
     */
    public $resourceCode;

    /**
     * @var bool
     */
    public $upgradeAvailable;
    protected $_name = [
        'desiredTotal' => 'DesiredTotal',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'limit' => 'Limit',
        'passed' => 'Passed',
        'resourceCode' => 'ResourceCode',
        'upgradeAvailable' => 'UpgradeAvailable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desiredTotal) {
            $res['DesiredTotal'] = $this->desiredTotal;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->passed) {
            $res['Passed'] = $this->passed;
        }

        if (null !== $this->resourceCode) {
            $res['ResourceCode'] = $this->resourceCode;
        }

        if (null !== $this->upgradeAvailable) {
            $res['UpgradeAvailable'] = $this->upgradeAvailable;
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
        if (isset($map['DesiredTotal'])) {
            $model->desiredTotal = $map['DesiredTotal'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['Passed'])) {
            $model->passed = $map['Passed'];
        }

        if (isset($map['ResourceCode'])) {
            $model->resourceCode = $map['ResourceCode'];
        }

        if (isset($map['UpgradeAvailable'])) {
            $model->upgradeAvailable = $map['UpgradeAvailable'];
        }

        return $model;
    }
}
