<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\CreatePolicyRequest;

use AlibabaCloud\Dara\Model;

class regularExpressList extends Model
{
    /**
     * @var int
     */
    public $actionType;

    /**
     * @var string
     */
    public $regularExpress;

    /**
     * @var string
     */
    public $regularExpressName;
    protected $_name = [
        'actionType' => 'ActionType',
        'regularExpress' => 'RegularExpress',
        'regularExpressName' => 'RegularExpressName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }

        if (null !== $this->regularExpress) {
            $res['RegularExpress'] = $this->regularExpress;
        }

        if (null !== $this->regularExpressName) {
            $res['RegularExpressName'] = $this->regularExpressName;
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
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }

        if (isset($map['RegularExpress'])) {
            $model->regularExpress = $map['RegularExpress'];
        }

        if (isset($map['RegularExpressName'])) {
            $model->regularExpressName = $map['RegularExpressName'];
        }

        return $model;
    }
}
