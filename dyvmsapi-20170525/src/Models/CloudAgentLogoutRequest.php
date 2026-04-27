<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class CloudAgentLogoutRequest extends Model
{
    /**
     * @var string
     */
    public $cno;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var int
     */
    public $ignoreOffline;

    /**
     * @var int
     */
    public $isKickout;

    /**
     * @var int
     */
    public $removeBinding;
    protected $_name = [
        'cno' => 'Cno',
        'enterpriseId' => 'EnterpriseId',
        'ignoreOffline' => 'IgnoreOffline',
        'isKickout' => 'IsKickout',
        'removeBinding' => 'RemoveBinding',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cno) {
            $res['Cno'] = $this->cno;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->ignoreOffline) {
            $res['IgnoreOffline'] = $this->ignoreOffline;
        }

        if (null !== $this->isKickout) {
            $res['IsKickout'] = $this->isKickout;
        }

        if (null !== $this->removeBinding) {
            $res['RemoveBinding'] = $this->removeBinding;
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
        if (isset($map['Cno'])) {
            $model->cno = $map['Cno'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['IgnoreOffline'])) {
            $model->ignoreOffline = $map['IgnoreOffline'];
        }

        if (isset($map['IsKickout'])) {
            $model->isKickout = $map['IsKickout'];
        }

        if (isset($map['RemoveBinding'])) {
            $model->removeBinding = $map['RemoveBinding'];
        }

        return $model;
    }
}
