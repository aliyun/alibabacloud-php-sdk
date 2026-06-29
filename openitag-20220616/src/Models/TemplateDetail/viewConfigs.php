<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models\TemplateDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\ViewPlugin;

class viewConfigs extends Model
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
        if (\is_array($this->viewPlugins)) {
            Model::validateArray($this->viewPlugins);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->viewPlugins) {
            if (\is_array($this->viewPlugins)) {
                $res['ViewPlugins'] = [];
                $n1 = 0;
                foreach ($this->viewPlugins as $item1) {
                    $res['ViewPlugins'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ViewPlugins'])) {
            if (!empty($map['ViewPlugins'])) {
                $model->viewPlugins = [];
                $n1 = 0;
                foreach ($map['ViewPlugins'] as $item1) {
                    $model->viewPlugins[$n1] = ViewPlugin::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
