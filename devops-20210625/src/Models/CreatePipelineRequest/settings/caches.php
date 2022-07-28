<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreatePipelineRequest\settings;

use AlibabaCloud\Tea\Model;

class caches extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $directory;

    /**
     * @var bool
     */
    public $disable;
    protected $_name = [
        'desc'      => 'desc',
        'directory' => 'directory',
        'disable'   => 'disable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }
        if (null !== $this->directory) {
            $res['directory'] = $this->directory;
        }
        if (null !== $this->disable) {
            $res['disable'] = $this->disable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return caches
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }
        if (isset($map['directory'])) {
            $model->directory = $map['directory'];
        }
        if (isset($map['disable'])) {
            $model->disable = $map['disable'];
        }

        return $model;
    }
}
