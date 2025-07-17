<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\Table;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\Table\businessMetadata\extension;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\Table\businessMetadata\tags;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\Table\businessMetadata\upstreamTasks;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\undefined;
use AlibabaCloud\Tea\Model;

class businessMetadata extends Model
{
    /**
     * @var undefined[][]
     */
    public $categories;

    /**
     * @var extension
     */
    public $extension;

    /**
     * @example ## 使用说明
     *
     * @var string
     */
    public $readme;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var upstreamTasks[]
     */
    public $upstreamTasks;
    protected $_name = [
        'categories' => 'Categories',
        'extension' => 'Extension',
        'readme' => 'Readme',
        'tags' => 'Tags',
        'upstreamTasks' => 'UpstreamTasks',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->categories) {
            $res['Categories'] = $this->categories;
        }
        if (null !== $this->extension) {
            $res['Extension'] = null !== $this->extension ? $this->extension->toMap() : null;
        }
        if (null !== $this->readme) {
            $res['Readme'] = $this->readme;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->upstreamTasks) {
            $res['UpstreamTasks'] = [];
            if (null !== $this->upstreamTasks && \is_array($this->upstreamTasks)) {
                $n = 0;
                foreach ($this->upstreamTasks as $item) {
                    $res['UpstreamTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return businessMetadata
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = $map['Categories'];
            }
        }
        if (isset($map['Extension'])) {
            $model->extension = extension::fromMap($map['Extension']);
        }
        if (isset($map['Readme'])) {
            $model->readme = $map['Readme'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UpstreamTasks'])) {
            if (!empty($map['UpstreamTasks'])) {
                $model->upstreamTasks = [];
                $n = 0;
                foreach ($map['UpstreamTasks'] as $item) {
                    $model->upstreamTasks[$n++] = null !== $item ? upstreamTasks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
