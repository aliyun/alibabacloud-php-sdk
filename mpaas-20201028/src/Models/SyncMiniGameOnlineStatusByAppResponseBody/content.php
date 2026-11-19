<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\SyncMiniGameOnlineStatusByAppResponseBody;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var int
     */
    public $currentOnlineStatus;

    /**
     * @var string
     */
    public $miniProgramCode;

    /**
     * @var bool
     */
    public $statusChanged;
    protected $_name = [
        'currentOnlineStatus' => 'CurrentOnlineStatus',
        'miniProgramCode' => 'MiniProgramCode',
        'statusChanged' => 'StatusChanged',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentOnlineStatus) {
            $res['CurrentOnlineStatus'] = $this->currentOnlineStatus;
        }

        if (null !== $this->miniProgramCode) {
            $res['MiniProgramCode'] = $this->miniProgramCode;
        }

        if (null !== $this->statusChanged) {
            $res['StatusChanged'] = $this->statusChanged;
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
        if (isset($map['CurrentOnlineStatus'])) {
            $model->currentOnlineStatus = $map['CurrentOnlineStatus'];
        }

        if (isset($map['MiniProgramCode'])) {
            $model->miniProgramCode = $map['MiniProgramCode'];
        }

        if (isset($map['StatusChanged'])) {
            $model->statusChanged = $map['StatusChanged'];
        }

        return $model;
    }
}
