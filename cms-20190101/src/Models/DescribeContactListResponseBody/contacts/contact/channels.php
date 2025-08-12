<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListResponseBody\contacts\contact;

use AlibabaCloud\Dara\Model;

class channels extends Model
{
    /**
     * @var string
     */
    public $aliIM;

    /**
     * @var string
     */
    public $dingWebHook;

    /**
     * @var string
     */
    public $mail;

    /**
     * @var string
     */
    public $SMS;
    protected $_name = [
        'aliIM' => 'AliIM',
        'dingWebHook' => 'DingWebHook',
        'mail' => 'Mail',
        'SMS' => 'SMS',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliIM) {
            $res['AliIM'] = $this->aliIM;
        }

        if (null !== $this->dingWebHook) {
            $res['DingWebHook'] = $this->dingWebHook;
        }

        if (null !== $this->mail) {
            $res['Mail'] = $this->mail;
        }

        if (null !== $this->SMS) {
            $res['SMS'] = $this->SMS;
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
        if (isset($map['AliIM'])) {
            $model->aliIM = $map['AliIM'];
        }

        if (isset($map['DingWebHook'])) {
            $model->dingWebHook = $map['DingWebHook'];
        }

        if (isset($map['Mail'])) {
            $model->mail = $map['Mail'];
        }

        if (isset($map['SMS'])) {
            $model->SMS = $map['SMS'];
        }

        return $model;
    }
}
