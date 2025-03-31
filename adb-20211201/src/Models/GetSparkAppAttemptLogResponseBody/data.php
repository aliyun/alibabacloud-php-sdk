<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkAppAttemptLogResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $logContent;

    /**
     * @var int
     */
    public $logSize;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'appId' => 'AppId',
        'DBClusterId' => 'DBClusterId',
        'logContent' => 'LogContent',
        'logSize' => 'LogSize',
        'message' => 'Message',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->logContent) {
            $res['LogContent'] = $this->logContent;
        }

        if (null !== $this->logSize) {
            $res['LogSize'] = $this->logSize;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['LogContent'])) {
            $model->logContent = $map['LogContent'];
        }

        if (isset($map['LogSize'])) {
            $model->logSize = $map['LogSize'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
