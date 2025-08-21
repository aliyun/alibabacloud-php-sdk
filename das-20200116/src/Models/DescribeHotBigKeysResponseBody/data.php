<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotBigKeysResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotBigKeysResponseBody\data\bigKeys;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotBigKeysResponseBody\data\highTrafficKeys;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotBigKeysResponseBody\data\hotKeys;

class data extends Model
{
    /**
     * @var string
     */
    public $bigKeyMsg;

    /**
     * @var bigKeys
     */
    public $bigKeys;

    /**
     * @var string
     */
    public $highTrafficKeyMsg;

    /**
     * @var highTrafficKeys
     */
    public $highTrafficKeys;

    /**
     * @var string
     */
    public $hotKeyMsg;

    /**
     * @var hotKeys
     */
    public $hotKeys;
    protected $_name = [
        'bigKeyMsg' => 'BigKeyMsg',
        'bigKeys' => 'BigKeys',
        'highTrafficKeyMsg' => 'HighTrafficKeyMsg',
        'highTrafficKeys' => 'HighTrafficKeys',
        'hotKeyMsg' => 'HotKeyMsg',
        'hotKeys' => 'HotKeys',
    ];

    public function validate()
    {
        if (null !== $this->bigKeys) {
            $this->bigKeys->validate();
        }
        if (null !== $this->highTrafficKeys) {
            $this->highTrafficKeys->validate();
        }
        if (null !== $this->hotKeys) {
            $this->hotKeys->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bigKeyMsg) {
            $res['BigKeyMsg'] = $this->bigKeyMsg;
        }

        if (null !== $this->bigKeys) {
            $res['BigKeys'] = null !== $this->bigKeys ? $this->bigKeys->toArray($noStream) : $this->bigKeys;
        }

        if (null !== $this->highTrafficKeyMsg) {
            $res['HighTrafficKeyMsg'] = $this->highTrafficKeyMsg;
        }

        if (null !== $this->highTrafficKeys) {
            $res['HighTrafficKeys'] = null !== $this->highTrafficKeys ? $this->highTrafficKeys->toArray($noStream) : $this->highTrafficKeys;
        }

        if (null !== $this->hotKeyMsg) {
            $res['HotKeyMsg'] = $this->hotKeyMsg;
        }

        if (null !== $this->hotKeys) {
            $res['HotKeys'] = null !== $this->hotKeys ? $this->hotKeys->toArray($noStream) : $this->hotKeys;
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
        if (isset($map['BigKeyMsg'])) {
            $model->bigKeyMsg = $map['BigKeyMsg'];
        }

        if (isset($map['BigKeys'])) {
            $model->bigKeys = bigKeys::fromMap($map['BigKeys']);
        }

        if (isset($map['HighTrafficKeyMsg'])) {
            $model->highTrafficKeyMsg = $map['HighTrafficKeyMsg'];
        }

        if (isset($map['HighTrafficKeys'])) {
            $model->highTrafficKeys = highTrafficKeys::fromMap($map['HighTrafficKeys']);
        }

        if (isset($map['HotKeyMsg'])) {
            $model->hotKeyMsg = $map['HotKeyMsg'];
        }

        if (isset($map['HotKeys'])) {
            $model->hotKeys = hotKeys::fromMap($map['HotKeys']);
        }

        return $model;
    }
}
