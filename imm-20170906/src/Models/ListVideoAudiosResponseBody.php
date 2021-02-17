<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\SDK\Imm\V20170906\Models\ListVideoAudiosResponseBody\audios;
use AlibabaCloud\Tea\Model;

class ListVideoAudiosResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var audios[]
     */
    public $audios;

    /**
     * @var string
     */
    public $videoUri;

    /**
     * @var string
     */
    public $nextMarker;

    /**
     * @var string
     */
    public $setId;
    protected $_name = [
        'requestId'  => 'RequestId',
        'audios'     => 'Audios',
        'videoUri'   => 'VideoUri',
        'nextMarker' => 'NextMarker',
        'setId'      => 'SetId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->audios) {
            $res['Audios'] = [];
            if (null !== $this->audios && \is_array($this->audios)) {
                $n = 0;
                foreach ($this->audios as $item) {
                    $res['Audios'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->videoUri) {
            $res['VideoUri'] = $this->videoUri;
        }
        if (null !== $this->nextMarker) {
            $res['NextMarker'] = $this->nextMarker;
        }
        if (null !== $this->setId) {
            $res['SetId'] = $this->setId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVideoAudiosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Audios'])) {
            if (!empty($map['Audios'])) {
                $model->audios = [];
                $n             = 0;
                foreach ($map['Audios'] as $item) {
                    $model->audios[$n++] = null !== $item ? audios::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VideoUri'])) {
            $model->videoUri = $map['VideoUri'];
        }
        if (isset($map['NextMarker'])) {
            $model->nextMarker = $map['NextMarker'];
        }
        if (isset($map['SetId'])) {
            $model->setId = $map['SetId'];
        }

        return $model;
    }
}
