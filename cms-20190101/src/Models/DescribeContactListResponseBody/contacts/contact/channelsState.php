<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListResponseBody\contacts\contact;

use AlibabaCloud\Tea\Model;

class channelsState extends Model
{
    /**
     * @var string
     */
    public $dingWebHook;

    /**
     * @var string
     */
    public $SMS;

    /**
     * @var string
     */
    public $mail;

    /**
     * @var string
     */
    public $aliIM;
    protected $_name = [
        'dingWebHook' => 'DingWebHook',
        'SMS'         => 'SMS',
        'mail'        => 'Mail',
        'aliIM'       => 'AliIM',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dingWebHook) {
            $res['DingWebHook'] = $this->dingWebHook;
        }
        if (null !== $this->SMS) {
            $res['SMS'] = $this->SMS;
        }
        if (null !== $this->mail) {
            $res['Mail'] = $this->mail;
        }
        if (null !== $this->aliIM) {
            $res['AliIM'] = $this->aliIM;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return channelsState
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DingWebHook'])) {
            $model->dingWebHook = $map['DingWebHook'];
        }
        if (isset($map['SMS'])) {
            $model->SMS = $map['SMS'];
        }
        if (isset($map['Mail'])) {
            $model->mail = $map['Mail'];
        }
        if (isset($map['AliIM'])) {
            $model->aliIM = $map['AliIM'];
        }

        return $model;
    }
}
