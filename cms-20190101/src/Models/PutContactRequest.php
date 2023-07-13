<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutContactRequest\channels;
use AlibabaCloud\Tea\Model;

class PutContactRequest extends Model
{
    /**
     * @var channels
     */
    public $channels;

    /**
     * @description The name of the alert contact.
     *
     * @example Alice
     *
     * @var string
     */
    public $contactName;

    /**
     * @description The description of the alert contact.
     *
     * @example ECS_Instance
     *
     * @var string
     */
    public $describe;

    /**
     * @description The language in which the alert information is displayed. Valid values:
     *
     *   zh-cn: simplified Chinese
     *   en: English
     *
     * >  If you do not specify a value for this parameter, Cloud Monitor identifies the language of the alert information based on the region of your Alibaba Cloud account.
     * @example zh-cn
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'channels'    => 'Channels',
        'contactName' => 'ContactName',
        'describe'    => 'Describe',
        'lang'        => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channels) {
            $res['Channels'] = null !== $this->channels ? $this->channels->toMap() : null;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->describe) {
            $res['Describe'] = $this->describe;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutContactRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Channels'])) {
            $model->channels = channels::fromMap($map['Channels']);
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['Describe'])) {
            $model->describe = $map['Describe'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
