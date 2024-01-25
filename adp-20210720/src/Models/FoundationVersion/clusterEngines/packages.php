<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\FoundationVersion\clusterEngines;

use AlibabaCloud\SDK\Adp\V20210720\Models\Platform;
use AlibabaCloud\Tea\Model;

class packages extends Model
{
    /**
     * @example ENUM:["amd64","arm64"]
     *
     * @var string
     */
    public $architecture;

    /**
     * @example ENUM:["linux","windows"]
     *
     * @var string
     */
    public $os;

    /**
     * @var Platform[]
     */
    public $platforms;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'architecture' => 'architecture',
        'os'           => 'os',
        'platforms'    => 'platforms',
        'url'          => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['architecture'] = $this->architecture;
        }
        if (null !== $this->os) {
            $res['os'] = $this->os;
        }
        if (null !== $this->platforms) {
            $res['platforms'] = [];
            if (null !== $this->platforms && \is_array($this->platforms)) {
                $n = 0;
                foreach ($this->platforms as $item) {
                    $res['platforms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return packages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['architecture'])) {
            $model->architecture = $map['architecture'];
        }
        if (isset($map['os'])) {
            $model->os = $map['os'];
        }
        if (isset($map['platforms'])) {
            if (!empty($map['platforms'])) {
                $model->platforms = [];
                $n                = 0;
                foreach ($map['platforms'] as $item) {
                    $model->platforms[$n++] = null !== $item ? Platform::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
