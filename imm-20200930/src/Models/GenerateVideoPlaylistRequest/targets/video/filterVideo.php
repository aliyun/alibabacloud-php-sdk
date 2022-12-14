<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistRequest\targets\video;

use AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistRequest\targets\video\filterVideo\delogos;
use AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistRequest\targets\video\filterVideo\watermarks;
use AlibabaCloud\Tea\Model;

class filterVideo extends Model
{
    /**
     * @var delogos[]
     */
    public $delogos;

    /**
     * @var watermarks[]
     */
    public $watermarks;
    protected $_name = [
        'delogos'    => 'Delogos',
        'watermarks' => 'Watermarks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->delogos) {
            $res['Delogos'] = [];
            if (null !== $this->delogos && \is_array($this->delogos)) {
                $n = 0;
                foreach ($this->delogos as $item) {
                    $res['Delogos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->watermarks) {
            $res['Watermarks'] = [];
            if (null !== $this->watermarks && \is_array($this->watermarks)) {
                $n = 0;
                foreach ($this->watermarks as $item) {
                    $res['Watermarks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filterVideo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Delogos'])) {
            if (!empty($map['Delogos'])) {
                $model->delogos = [];
                $n              = 0;
                foreach ($map['Delogos'] as $item) {
                    $model->delogos[$n++] = null !== $item ? delogos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Watermarks'])) {
            if (!empty($map['Watermarks'])) {
                $model->watermarks = [];
                $n                 = 0;
                foreach ($map['Watermarks'] as $item) {
                    $model->watermarks[$n++] = null !== $item ? watermarks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
