<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class DataToolSpecToolsMetaValue extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var mixed[]
     */
    public $templates;
    protected $_name = [
        'enabled' => 'Enabled',
        'templates' => 'Templates',
    ];

    public function validate()
    {
        if (\is_array($this->templates)) {
            Model::validateArray($this->templates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->templates) {
            if (\is_array($this->templates)) {
                $res['Templates'] = [];
                foreach ($this->templates as $key1 => $value1) {
                    $res['Templates'][$key1] = $value1;
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
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['Templates'])) {
            if (!empty($map['Templates'])) {
                $model->templates = [];
                foreach ($map['Templates'] as $key1 => $value1) {
                    $model->templates[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
