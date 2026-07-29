<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\Dara\Model;

class SetAccountAttributesRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $logEnabled;

    /**
     * @var string
     */
    public $logStoreName;

    /**
     * @var bool
     */
    public $messageTraceEnabled;

    /**
     * @var string
     */
    public $projectName;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'logEnabled' => 'LogEnabled',
        'logStoreName' => 'LogStoreName',
        'messageTraceEnabled' => 'MessageTraceEnabled',
        'projectName' => 'ProjectName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->logEnabled) {
            $res['LogEnabled'] = $this->logEnabled;
        }

        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }

        if (null !== $this->messageTraceEnabled) {
            $res['MessageTraceEnabled'] = $this->messageTraceEnabled;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['LogEnabled'])) {
            $model->logEnabled = $map['LogEnabled'];
        }

        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }

        if (isset($map['MessageTraceEnabled'])) {
            $model->messageTraceEnabled = $map['MessageTraceEnabled'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
