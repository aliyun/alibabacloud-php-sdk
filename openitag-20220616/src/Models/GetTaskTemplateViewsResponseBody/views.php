<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models\GetTaskTemplateViewsResponseBody;

use AlibabaCloud\SDK\OpenITag\V20220616\Models\ViewPlugin;
use AlibabaCloud\Tea\Model;

class views extends Model
{
    /**
     * @var ViewPlugin[]
     */
    public $viewPlugins;
    protected $_name = [
        'viewPlugins' => 'ViewPlugins',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->viewPlugins) {
            $res['ViewPlugins'] = [];
            if (null !== $this->viewPlugins && \is_array($this->viewPlugins)) {
                $n = 0;
                foreach ($this->viewPlugins as $item) {
                    $res['ViewPlugins'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return views
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ViewPlugins'])) {
            if (!empty($map['ViewPlugins'])) {
                $model->viewPlugins = [];
                $n                  = 0;
                foreach ($map['ViewPlugins'] as $item) {
                    $model->viewPlugins[$n++] = null !== $item ? ViewPlugin::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
