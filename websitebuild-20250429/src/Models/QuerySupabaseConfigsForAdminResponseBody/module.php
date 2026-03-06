<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QuerySupabaseConfigsForAdminResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var mixed[]
     */
    public $configs;
    protected $_name = [
        'configs' => 'Configs',
    ];

    public function validate()
    {
        if (\is_array($this->configs)) {
            Model::validateArray($this->configs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configs) {
            if (\is_array($this->configs)) {
                $res['Configs'] = [];
                foreach ($this->configs as $key1 => $value1) {
                    $res['Configs'][$key1] = $value1;
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
        if (isset($map['Configs'])) {
            if (!empty($map['Configs'])) {
                $model->configs = [];
                foreach ($map['Configs'] as $key1 => $value1) {
                    $model->configs[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
