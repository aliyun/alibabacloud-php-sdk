<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;

class UnbindSlbRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $deleteListener;

    /**
     * @var string
     */
    public $slbId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'appId' => 'AppId',
        'deleteListener' => 'DeleteListener',
        'slbId' => 'SlbId',
        'type' => 'Type',
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

        if (null !== $this->deleteListener) {
            $res['DeleteListener'] = $this->deleteListener;
        }

        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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

        if (isset($map['DeleteListener'])) {
            $model->deleteListener = $map['DeleteListener'];
        }

        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
