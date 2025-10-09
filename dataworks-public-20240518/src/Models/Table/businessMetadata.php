<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\Table;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\Table\businessMetadata\categories;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\Table\businessMetadata\extension;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\Table\businessMetadata\tags;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\Table\businessMetadata\upstreamTasks;

class businessMetadata extends Model
{
    /**
     * @var categories[][]
     */
    public $categories;

    /**
     * @var extension
     */
    public $extension;

    /**
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

    public function validate()
    {
        if (\is_array($this->categories)) {
            Model::validateArray($this->categories);
        }
        if (null !== $this->extension) {
            $this->extension->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->upstreamTasks)) {
            Model::validateArray($this->upstreamTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categories) {
            if (\is_array($this->categories)) {
                $res['Categories'] = [];
                $n1 = 0;
                foreach ($this->categories as $item1) {
                    if (\is_array($item1)) {
                        $res['Categories'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['Categories'][$n1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->extension) {
            $res['Extension'] = null !== $this->extension ? $this->extension->toArray($noStream) : $this->extension;
        }

        if (null !== $this->readme) {
            $res['Readme'] = $this->readme;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->upstreamTasks) {
            if (\is_array($this->upstreamTasks)) {
                $res['UpstreamTasks'] = [];
                $n1 = 0;
                foreach ($this->upstreamTasks as $item1) {
                    $res['UpstreamTasks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = [];
                $n1 = 0;
                foreach ($map['Categories'] as $item1) {
                    if (!empty($item1)) {
                        $model->categories[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->categories[$n1][$n2] = categories::fromMap($item2);
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UpstreamTasks'])) {
            if (!empty($map['UpstreamTasks'])) {
                $model->upstreamTasks = [];
                $n1 = 0;
                foreach ($map['UpstreamTasks'] as $item1) {
                    $model->upstreamTasks[$n1] = upstreamTasks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
