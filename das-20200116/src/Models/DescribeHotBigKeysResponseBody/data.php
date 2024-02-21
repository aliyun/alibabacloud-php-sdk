<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotBigKeysResponseBody;

use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotBigKeysResponseBody\data\bigKeys;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotBigKeysResponseBody\data\hotKeys;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The reason why the large key failed to be queried.
     *
     * @example current version doesn\"t support
     *
     * @var string
     */
    public $bigKeyMsg;

    /**
     * @description The list of large keys.
     *
     * @var bigKeys
     */
    public $bigKeys;

    /**
     * @description The reason why the hot key failed to be queried.
     *
     * @example current version doesn\"t support
     *
     * @var string
     */
    public $hotKeyMsg;

    /**
     * @description The list of hot keys.
     *
     * @var hotKeys
     */
    public $hotKeys;
    protected $_name = [
        'bigKeyMsg' => 'BigKeyMsg',
        'bigKeys'   => 'BigKeys',
        'hotKeyMsg' => 'HotKeyMsg',
        'hotKeys'   => 'HotKeys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bigKeyMsg) {
            $res['BigKeyMsg'] = $this->bigKeyMsg;
        }
        if (null !== $this->bigKeys) {
            $res['BigKeys'] = null !== $this->bigKeys ? $this->bigKeys->toMap() : null;
        }
        if (null !== $this->hotKeyMsg) {
            $res['HotKeyMsg'] = $this->hotKeyMsg;
        }
        if (null !== $this->hotKeys) {
            $res['HotKeys'] = null !== $this->hotKeys ? $this->hotKeys->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BigKeyMsg'])) {
            $model->bigKeyMsg = $map['BigKeyMsg'];
        }
        if (isset($map['BigKeys'])) {
            $model->bigKeys = bigKeys::fromMap($map['BigKeys']);
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
