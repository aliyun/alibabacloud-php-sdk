<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutContactRequest\channels;

class PutContactRequest extends Model
{
    /**
     * @var channels
     */
    public $channels;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $describe;

    /**
     * @var string
     */
    public $lang;
    protected $_name = [
        'channels' => 'Channels',
        'contactName' => 'ContactName',
        'describe' => 'Describe',
        'lang' => 'Lang',
    ];

    public function validate()
    {
        if (null !== $this->channels) {
            $this->channels->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channels) {
            $res['Channels'] = null !== $this->channels ? $this->channels->toArray($noStream) : $this->channels;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
