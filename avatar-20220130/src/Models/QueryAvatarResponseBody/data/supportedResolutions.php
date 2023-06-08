<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\QueryAvatarResponseBody\data;

use AlibabaCloud\SDK\Avatar\V20220130\Models\QueryAvatarResponseBody\data\supportedResolutions\offline;
use AlibabaCloud\SDK\Avatar\V20220130\Models\QueryAvatarResponseBody\data\supportedResolutions\online;
use AlibabaCloud\Tea\Model;

class supportedResolutions extends Model
{
    /**
     * @var offline[]
     */
    public $offline;

    /**
     * @var online[]
     */
    public $online;
    protected $_name = [
        'offline' => 'Offline',
        'online'  => 'Online',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->offline) {
            $res['Offline'] = [];
            if (null !== $this->offline && \is_array($this->offline)) {
                $n = 0;
                foreach ($this->offline as $item) {
                    $res['Offline'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->online) {
            $res['Online'] = [];
            if (null !== $this->online && \is_array($this->online)) {
                $n = 0;
                foreach ($this->online as $item) {
                    $res['Online'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedResolutions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Offline'])) {
            if (!empty($map['Offline'])) {
                $model->offline = [];
                $n              = 0;
                foreach ($map['Offline'] as $item) {
                    $model->offline[$n++] = null !== $item ? offline::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Online'])) {
            if (!empty($map['Online'])) {
                $model->online = [];
                $n             = 0;
                foreach ($map['Online'] as $item) {
                    $model->online[$n++] = null !== $item ? online::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
